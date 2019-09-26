import React, {Component} from "react";
import {connect} from 'react-redux'
import axios from 'axios';

import CreateFoodModal from '../model/CreateFoodModal'
import CreateSetModel from '../model/CreateSetModel'
import {Table, Dropdown, Menu, Icon, Button, Select, Cascader, Modal, Input} from 'antd';
import Highlighter from "react-highlight-words";

const {Option} = Select;
const {confirm} = Modal;

export default class OrderTable extends Component {
    state = {
        data: [],
        pagination: {},
        loading: false,
        results: 10,
        selectedRowKeys: [],
        keys: [],
        optionAction: '',
        showModelCreateSet: false,
        searchText: ''
    };


    componentDidMount() {
        this.fetch();
    }

    handleDelete = () => {
        confirm({
            title: 'Do you want to delete these items?',
            onOk() {
                return new Promise((resolve, reject) => {
                    setTimeout(Math.random() > 0.5 ? resolve : reject, 1000);
                }).catch(() => console.log('Oops errors!'));
            },
        });
    };

    dropdownOption = (
        <Menu>
            <Menu.Item>
                Update
            </Menu.Item>
            <Menu.Item onClick={this.handleDelete}>
                Delete
            </Menu.Item>
        </Menu>
    );

    getColumnSearchProps = dataIndex => ({
        filterDropdown: ({ setSelectedKeys, selectedKeys, confirm, clearFilters }) => (
            <div style={{ padding: 8 }}>
                <Input
                    ref={node => {
                        this.searchInput = node;
                    }}
                    placeholder={`Search ${dataIndex}`}
                    value={selectedKeys[0]}
                    onChange={e => setSelectedKeys(e.target.value ? [e.target.value] : [])}
                    onPressEnter={() => this.handleSearch(selectedKeys, confirm)}
                    style={{ width: 188, marginBottom: 8, display: 'block' }}
                />
                <Button
                    type="primary"
                    onClick={() => this.handleSearch(selectedKeys, confirm)}
                    icon="search"
                    size="small"
                    style={{ width: 90, marginRight: 8 }}
                >
                    Search
                </Button>
                <Button onClick={() => this.handleReset(clearFilters)} size="small" style={{ width: 90 }}>
                    Reset
                </Button>
            </div>
        ),
        filterIcon: filtered => (
            <Icon type="search" style={{ color: filtered ? '#1890ff' : undefined }} />
        ),
        onFilter: (value, record) =>
            record[dataIndex]
                .toString()
                .toLowerCase()
                .includes(value.toLowerCase()),
        onFilterDropdownVisibleChange: visible => {
            if (visible) {
                setTimeout(() => this.searchInput.select());
            }
        },
        render: text => (
            <Highlighter
                highlightStyle={{ backgroundColor: '#ffc069', padding: 0 }}
                searchWords={[this.state.searchText]}
                autoEscape
                textToHighlight={text.toString()}
            />
        ),
    });

    handleSearch = (selectedKeys, confirm) => {
        confirm();
        this.setState({ searchText: selectedKeys[0] });
    };

    handleReset = clearFilters => {
        clearFilters();
        this.setState({ searchText: '' });
    };

    handleTableChange = (pagination, filters, sorter) => {
        const pager = {...this.state.pagination};
        pager.current = pagination.current;
        this.setState({
            pagination: pager,
        });
        this.fetch({
            results: pagination.pageSize,
            page: pagination.current,
            sortField: sorter.field,
            sortOrder:  sorter.order ? sorter.order.replace('end','') : sorter.order,
            ...filters,
        });
    };

    handleAction = () => {
        if (this.state.optionAction === 'create_set') {
            this.setState({
                showModelCreateSet: true
            })
        }
    };

    fetch = (params = {}) => {
        console.log('params:', params);
        this.setState({loading: true});
        axios.get('/api/order', {
            params: {
                results: this.state.results,
                ...params,
            }
        }).then(res => {
            const data = res.data;
            console.log(data);
            const pagination = {...this.state.pagination};
            pagination.total = data.totalCount;
            this.setState({
                loading: false,
                data: data.orders,
                pagination,
                keys: data.keys
            });
        });
    };

    handleSelectChange = selectedRowKeys => {
        this.setState({selectedRowKeys});
    };

    handleChangeAction = value => {
        this.setState({
            optionAction: value
        })
    };

    handleCancelCreateSet = e => {
        this.setState({
            showModelCreateSet: false,
        });
    };

    columns = [
        {
            title: 'User',
            dataIndex: 'username',
            render: (username,record) => `${record.user.profile.first_name} ${record.user.profile.last_name}`
        },
        {
            title: 'Set',
            dataIndex: 'sets',
            render: sets => sets.map(set => (<p>-{set.name}</p>))
        },
        {
            title: 'Amount',
            dataIndex: 'amount',
            render: amount => `${amount} $`
        },
        {
            title: 'Type',
            dataIndex: 'type'
        },
        {
            title: 'Address',
            dataIndex: 'address',
            render: address => `${address.addressTxt}`
        },
        {
            title: 'Status',
            dataIndex: 'status'
        },
        {
            title: 'Operation',
            fixed: 'right',
            render: () => (
                <Dropdown overlay={this.dropdownOption}>
                    <Button>
                        <Icon type="unordered-list" className='pr-2'/>
                        <Icon type="down"/>
                    </Button>
                </Dropdown>
            )
        },

    ];

    render() {
        const { selectedRowKeys, data } = this.state;
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
            <div style={{margin: 25, padding: 25, background: "white"}}>
                <div className="table_header">

                </div>
                <Table
                    columns={this.columns}
                    rowSelection={rowSelection}
                    rowKey={record => record.id}
                    dataSource={this.state.data}
                    pagination={this.state.pagination}
                    loading={this.state.loading}
                    onChange={this.handleTableChange}
                    bordered
                />
                <div style={{position: "relative"}}>
                    <div className="action-check-box">
                        <small style={{position: "absolute", top: 34}}>Total
                            select {this.state.selectedRowKeys.length} items</small>
                        <Select
                            placeholder="Select action"
                            disabled={this.state.selectedRowKeys.length <= 0}
                            style={{width: 120}}
                            onChange={this.handleChangeAction}
                        >
                            <Option value="create_set">Create set</Option>
                            <Option value="delete">Delete</Option>
                        </Select>
                        <Button onClick={this.handleAction}
                                disabled={this.state.selectedRowKeys.length <= 0}>Go</Button>
                    </div>
                </div>
                <CreateSetModel/>
            </div>

        );
    }
}