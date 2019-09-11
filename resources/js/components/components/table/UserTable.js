import React from 'react'
import {Link} from 'react-router-dom';
import {Table, Button, Icon, Input, DatePicker, Cascader, Modal, Select} from 'antd'
import Highlighter from 'react-highlight-words';
import {connect} from "react-redux";
import {logoutUser} from '../../redux/actions/authAction';
import _ from 'lodash';
// import classnames from 'classnames';
import hanhchinhvn from '../../hanhchinhvn.json'
import axios from 'axios'
import moment from 'moment';
import mapStateToProps from "react-redux/es/connect/mapStateToProps";

// const { confirm } = Modal;
const {RangePicker} = DatePicker;
const {Search} = Input;
const {Option} = Select;

class UserTable extends React.Component {
    state = {
        searchText: '',
        data: [],
        pagination: {},
        loading: false,
        filterDate: {},
        filters: {},
        sorter: {},
        searchAddress: '',
        selectedRowKeys: [],
        results: 10
    };

    componentDidMount() {
        this.fetch();
    }

    getColumnSearchProps = dataIndex => ({
        filterDropdown: ({setSelectedKeys, selectedKeys, confirm, clearFilters}) => (
            <div style={{padding: 8}}>
                <Input
                    ref={node => {
                        this.searchInput = node;
                    }}
                    placeholder={`Search ${dataIndex}`}
                    value={selectedKeys[0]}
                    onChange={e => setSelectedKeys(e.target.value ? [e.target.value] : [])}
                    onPressEnter={() => this.handleSearch(selectedKeys, confirm, dataIndex)}
                    style={{width: 188, marginBottom: 8, display: 'block'}}
                />
                <Button
                    type="primary"
                    onClick={() => this.handleSearch(selectedKeys, confirm, dataIndex)}
                    icon="search"
                    size="small"
                    style={{width: 90, marginRight: 8}}
                >
                    Search
                </Button>
                <Button onClick={() => this.handleReset(clearFilters, dataIndex)} size="small" style={{width: 90}}>
                    Reset
                </Button>
            </div>
        ),
        filterIcon: filtered => (
            <Icon type="search" style={{color: filtered ? '#1890ff' : undefined}}/>
        ),
        onFilterDropdownVisibleChange: visible => {
            if (visible) {
                setTimeout(() => this.searchInput.select());
            }
        },
        render: text => {
            return !this.isSearch(dataIndex) ? (<span>{text}</span>) : (<Highlighter
                highlightStyle={{backgroundColor: '#ffc069', padding: 0}}
                searchWords={[this.state.searchText[dataIndex]]}
                autoEscape
                textToHighlight={text.toString()}
            />)
        },
    });

    isSearch = (dataIndex) => {
        return Object.keys(this.state.searchText).indexOf(dataIndex) !== -1;
    };

    handleSearch = (selectedKeys, confirm, dataIndex) => {
        confirm();
        this.setState({
            searchText: {...this.state.searchText, [dataIndex]: selectedKeys[0]}
        });
    };

    handleReset = (clearFilters, dataIndex) => {
        clearFilters();

        this.setState(state => {

        });

        this.setState({searchText: {...this.state.searchText, [dataIndex]: ''}});
    };

    handleTableChange = (pagination, filters, sorter) => {
        // console.log(JSON.stringify(sorter) )
        const pager = {...this.state.pagination};
        const {filterDate, searchAddress} = this.state;
        pager.current = pagination.current;
        this.setState({
            pagination: pager,
            filters,
            sorter
        });

        this.fetch({
            page: pagination.current,
            sortField: sorter.field,
            sortOrder: sorter.order && sorter.order.substr(0, sorter.order.length - 3),
            filters,
            filterDate,
            searchAddress
        });
    };

    fetch = (param = {}) => {
        // console.log('params:', param);
        this.setState({loading: true});
        axios.get('/api/user', {
            params: {
                results: this.state.results,
                ...param,
            }
        }).then(res => {
            const pagination = {...this.state.pagination};
            // Read total count from server
            pagination.total = res.data.totalCount;
            // pagination.total = 20;
            this.setState({
                loading: false,
                data: res.data.users,
                pagination,
                keys: res.data.keys,
                selectedRowKeys: this.state.selectedRowKeys.filter(key => res.data.keys.indexOf(key) !== -1)
            });

        }).catch(err => {
            alert(err);
            // if (err && err.response.status === 401) {
            //     this.props.logoutUser()
            // }
        });
    };

    handleData = (date, dateString) => {
        var {pagination, filters, sorter, searchAddress} = this.state;
        var filterDate = [];
        if (date.length > 0) {
            filterDate = {
                start: date[0].valueOf(),
                end: date[1].valueOf()
            }
        }
        this.setState({filterDate});
        this.fetch({
            // results: pagination.pageSize,
            page: pagination.current,
            sortField: sorter.field,
            sortOrder: sorter.order && sorter.order.replace('end'),
            filters,
            filterDate,
            searchAddress
        });
    };

    handleSearchAddress = (values) => {
        var {pagination, filters, sorter, filterDate} = this.state;
        var filterAddress = '';
        if (values.length > 0) {
            filterAddress = values.join('/')
        }
        this.setState({filterAddress});
        this.fetch({
            page: pagination.current,
            sortField: sorter.field,
            sortOrder: sorter.order && sorter.order.substr(0, sorter.order.length - 3),
            filters,
            filterDate,
            filterAddress
        });
    };

    handleSelectChange = selectedRowKeys => {
        this.setState({selectedRowKeys});
    };

    getName(input) {
        const hanhChArr = input.split('/');
        var re = hanhchinhvn.filter(p => {
            return p.value === hanhChArr[0]
        })[0];
        var name = (re ? re.label : '');
        for (let i = 1; i < hanhChArr.length; i++) {
            re = re.children.filter(p2 => {
                return p2.value === hanhChArr[i]
            })[0];
            name += ', ' + (re ? re.label : '')
        }
        return name
    }

    render() {
        console.log('component render');

        const columns = [
            {
                title: 'Avatar',
                dataIndex: 'avatar',
                render: (avatar, record) => (
                    <img className="avatar_in_list" src={avatar} alt={record.fisrt_name + ' ' + record.last_name}/>),
            },
            {
                title: 'Full Name',
                dataIndex: 'name',
                render: (name, record) => (
                    <Link to={`/ad/user/${record.id}`}>{record.first_name} {record.last_name}</Link>),
                // ...this.getColumnSearchProps('username'),
                // width: '20%',
            },
            {
                title: 'Username',
                dataIndex: 'username',
                sorter: true,
                ...this.getColumnSearchProps('username'),
                // width: '13%',
            },

            {
                title: 'Gender',
                dataIndex: 'gender',
                filters: [{text: 'Male', value: 'M'}, {text: 'Female', value: 'F'}, {text: 'Other', value: 'O'}],
            },
            {
                title: 'Email',
                dataIndex: 'email',
                ...this.getColumnSearchProps('email'),
            },
            {
                title: 'Age',
                dataIndex: 'profile.age',
                render: (age, record) => `${record.age}`,
                sorter: true,
            },
            {
                title: 'Phone',
                dataIndex: 'phone',
            },
            {
                title: 'Address',
                dataIndex: 'addressTxt',
                render: address => (<p>{this.getName(address.split('@')[0])} <br/> {address.split('@')[1]}</p>)
            },
            {
                title: 'Create at',
                dataIndex: 'create_at',
                sorter: true,
                render: create_at => `${moment(parseFloat(create_at)).format('YYYY-MM-DD')}`
            },
            {
                title: 'Status',
                dataIndex: 'status',
                filters: [
                    {text: 'Active', value: 'active'},
                    {text: 'Deleted', value: 'delete'},
                    {text: 'Vip', value: 'vip'},
                    {text: 'Banned', value: 'banned'},
                ]
                // ,
                // sorter: true,
                // render: create_at => `${moment(parseFloat(create_at)).fromNow()}`
            }
        ];

        const {selectedRowKeys, data, pagination, loading, results} = this.state;

        // const pageCount =  Math.ceil(pagination.total / results);

        const rowSelection = {
            selectedRowKeys,
            onChange: this.handleSelectChange,
            onSelectAll: (selected) => {
                if (selected) {
                    this.setState({selectedRowKeys: this.state.keys});
                } else {
                    this.setState({selectedRowKeys: []});
                }
            }
        };

        return (
            <div style={{margin: 25, padding: 25, background: '#fff'}}>
                <div className="table_header">
                    <Search
                        placeholder="Search user"
                        onSearch={value => console.log(value)}
                        style={{width: 200}}
                    />
                    <Cascader
                        style={{width: 400}}
                        // defaultValue={['hanoi', 'caugiay', 'dichvong']}
                        placeholder="Search by address"
                        options={hanhchinhvn}
                        onChange={this.handleSearchAddress}
                        changeOnSelect
                    />
                    <RangePicker onChange={this.handleData}/>
                    <Button type="primary" icon="search">Search</Button>
                    <Button>Reset</Button>
                    <Modal
                        visible={false}
                        destroyOnClose
                        maskClosable
                        centered
                    >
                        <Input/>
                    </Modal>
                </div>
                <Table
                    columns={columns}
                    rowKey={record => record.id}
                    dataSource={data}
                    pagination={pagination}
                    loading={loading}
                    onChange={this.handleTableChange}
                    bordered
                    rowSelection={rowSelection}
                    className="table-user"
                />
                <div style={{position: "relative"}}>
                    <div className="action-check-box">
                        <small style={{position: "absolute", top: 34}}>Total
                            select {this.state.selectedRowKeys.length} items</small>
                        <Select
                            disabled={this.state.selectedRowKeys.length <= 0}
                            defaultValue="lucy"
                            style={{width: 120}}
                            onChange={(a, b) => alert(a, b)}
                        >
                            <Option value="jack">Jack</Option>
                            <Option value="lucy">Lucy</Option>
                        </Select>
                        <Button disabled={this.state.selectedRowKeys.length <= 0}>Go</Button>
                    </div>

                    <div className="paging-action-box">
                        <Select
                            defaultValue={results}
                            style={{width: 120}}
                            onChange={value => {
                                this.setState({results: value})
                            }}
                        >
                            <Option value={10}>10 / page</Option>
                            <Option value={20}>20 / page</Option>
                            <Option value={30}>30 / page</Option>
                            <Option value={40}>40 / page</Option>
                        </Select>
                    </div>
                </div>
            </div>

        );
    }
}

export default connect(null, {logoutUser})(UserTable);
