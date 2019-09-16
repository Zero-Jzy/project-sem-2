import React, {Component} from "react";
import {connect} from 'react-redux'
import axios from 'axios';

import CreateFoodModal from '../model/CreateFoodModal'
import CreateSetModel from '../model/CreateSetModel'
import {Table, Dropdown, Menu, Icon, Button, Select, Cascader, Modal, Input} from 'antd';
import Highlighter from "react-highlight-words";

const {Option} = Select;
const {confirm} = Modal;

export default class SetTable extends Component {
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
        filterDropdown: ({setSelectedKeys, selectedKeys, confirm, clearFilters}) => (
            <div style={{padding: 8}}>
                <Input
                    ref={node => {
                        this.searchInput = node;
                    }}
                    placeholder={`Search ${dataIndex}`}
                    value={selectedKeys[0]}
                    onChange={e => setSelectedKeys(e.target.value ? [e.target.value] : [])}
                    onPressEnter={() => this.handleSearch(selectedKeys, confirm)}
                    style={{width: 188, marginBottom: 8, display: 'block'}}
                />
                <Button
                    type="primary"
                    onClick={() => this.handleSearch(selectedKeys, confirm)}
                    icon="search"
                    size="small"
                    style={{width: 90, marginRight: 8}}
                >
                    Search
                </Button>
                <Button onClick={() => this.handleReset(clearFilters)} size="small" style={{width: 90}}>
                    Reset
                </Button>
            </div>
        ),
        filterIcon: filtered => (
            <Icon type="search" style={{color: filtered ? '#1890ff' : undefined}}/>
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
                highlightStyle={{backgroundColor: '#ffc069', padding: 0}}
                searchWords={[this.state.searchText]}
                autoEscape
                textToHighlight={text.toString()}
            />
        ),
    });

    handleSearch = (selectedKeys, confirm) => {
        confirm();
        this.setState({searchText: selectedKeys[0]});
    };

    handleReset = clearFilters => {
        clearFilters();
        this.setState({searchText: ''});
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
            sortOrder: sorter.order,
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
        axios.get('/api/set', {
            params: {
                results: this.state.results,
                ...params,
            }
        }).then(res => {
            const data = res.data;
            const pagination = {...this.state.pagination};
            // Read total count from server
            pagination.total = data.totalCount;
            // pagination.total = 200;
            this.setState({
                loading: false,
                data: data.sets,
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
            title: 'Name',
            dataIndex: 'name',
            sorter: true,
            ...this.getColumnSearchProps('name')
        },
        {
            title: 'Images',
            dataIndex: 'image',
            render: image => (
                <img width={65}
                     src={'https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/' + image}
                     alt=""/>
            )

        },
        {
            title: 'Category',
            dataIndex: 'category_id',
            render: (category_id, record) => `${record.category.name || null}`,
            filters: [
                {text: 'Vegetables', value: 1},
                {text: 'Desserts', value: 2},
                {text: 'Protein Food', value: 3},
                {text: 'Barbecue', value: 4},
                {text: 'Soups and stews‎', value: 5},
                {text: 'Fried foods‎', value: 6},
                {text: 'Boiled food', value: 7},
                {text: 'Drinks', value: 8}
            ]
        },
        {
            title: 'Foods',
            dataIndex: 'foods',
            render: foods => foods.map(food => (
                <div key={food.id}>
                    {/*<img width={65}*/}
                    {/*     src={'https://res.cloudinary.com/cloud-pj-sem2/image/upload/w_300,h_300,c_lpad,b_auto/' + food.image}*/}
                    {/*     alt=""/>*/}
                         - {food.name}</div>
            ))
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
        const {selectedRowKeys, data} = this.state;
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
                    <CreateFoodModal/>
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
                        <CreateSetModel recordSelected={data.filter(item => selectedRowKeys.indexOf(item.id) !== -1)}
                                        handleCancel={this.handleCancelCreateSet}
                                        visible={this.state.showModelCreateSet}/>
                    </div>
                </div>
                <CreateSetModel/>
            </div>

        );
    }
}
