import React, {Component} from "react";
import {connect} from 'react-redux'
import axios from 'axios';

import CreateDishModal from '../model/CreateDishModal'
import {Table, Dropdown, Menu, Icon, Button, Select, Cascader, Modal, Input} from 'antd';
const { Option } = Select;
const {confirm} = Modal;

export default class FoodTable extends Component {
    state = {
        data: [],
        pagination: {},
        loading: false,
        results: 10,
        selectedRowKeys: [],
        keys: [1, 9]
    };
     columns = [
        {
            title: 'Name',
            dataIndex: 'name',
            sorter: true,
            render: name => `${name.first} ${name.last}`,
        },
        {
            title: 'Images',
            dataIndex: 'image',
            render: image => (<img width={45} src={image} alt=""/>)
        },
        {
            title: 'Category',
            dataIndex: 'category',
        },
        {
            title: 'Price',
            dataIndex: 'price',
        },
        {
            title: 'Nutritional Ingredients',
            children: [
                {
                    title: 'Calo',
                    dataIndex: 'calo'
                },
                {
                    title: 'Protein',
                    dataIndex: 'protein'
                },
                {
                    title: 'Dietary Fiber',
                    dataIndex: 'dietary_fiber'
                },
                {
                    title: 'Carbohydrate',
                    dataIndex: 'carbohydrate'
                },
                {
                    title: 'Fat',
                    dataIndex: 'fat'
                },
                {
                    title: 'Vitamins',
                    dataIndex: 'vitamins'
                },
                {
                    title: 'Minerals',
                    dataIndex: 'minerals'
                }
            ],
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
    }


    dropdownOption = (
        <Menu>
            <Menu.Item>
                Update
            </Menu.Item>
            <Menu.Item onClick={this.handleDelete}>
                Delete
            </Menu.Item>
        </Menu>
    )

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

    fetch = (params = {}) => {
        console.log('params:', params);
        this.setState({loading: true});
        axios.get('/api/food', {
            params: {
                results: this.state.results,
                ...params,
            }
        }).then(res => {
            const pagination = {...this.state.pagination};
            // Read total count from server
            // pagination.total = data.totalCount;
            pagination.total = 200;
            this.setState({
                loading: false,
                data: [{
                    id: 9,
                    name: 'bắp cải luộc',
                    category_id: 1,
                    price: 30000,
                    image: 'https://media.ex-cdn.com/EXP/media.phunutoday.vn/files/upload_images/2015/11/22/cach-lam-bap-cai-luoc-1-phunutoday_vn.jpg',
                    calo: 923.3,
                    protein: 23.1,
                    dietary_fiber: 12.2,
                    carbohydrate: 23.3,
                    fat: 43.23,
                    vitamins: 'A,C',
                    minerals: 'Iron,lead'
                }],
                pagination,
            });
        });
    };

    handleSelectChange = selectedRowKeys => {
        this.setState({selectedRowKeys});
    };

    render() {
        const {selectedRowKeys} = this.state;
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
                    <CreateDishModal/>
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
                            disabled={this.state.selectedRowKeys.length <= 0}
                            defaultValue="create_set"
                            style={{width: 120}}
                            onChange={(a, b) => alert(a, b)}
                        >
                            <Option value="create_set">Create set</Option>
                            <Option value="delete">Delete</Option>
                        </Select>
                        <Button disabled={this.state.selectedRowKeys.length <= 0}>Go</Button>
                    </div>
                </div>
            </div>

        );
    }
}