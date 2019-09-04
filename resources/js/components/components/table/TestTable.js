import React, {Component} from "react";
import { Table } from 'antd';

const columns = [
    {
        title: 'Name',
        dataIndex: 'name',
        sorter: true,
        render: name => `${name.first} ${name.last}`,
        width: '20%',
    },
    {
        title: 'Gender',
        dataIndex: 'gender',
        filters: [{ text: 'Male', value: 'male' }, { text: 'Female', value: 'female' }],
        width: '20%',
    },
    {
        title: 'Email',
        dataIndex: 'email',
    },
];

class TestTable extends Component {
    state = {
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
        pagination: {},
        loading: false,
    };

    componentDidMount() {
        this.fetch();
    }

    handleTableChange = (pagination, filters, sorter) => {
        const pager = { ...this.state.pagination };
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
    };

    render() {
        return (
            <Table
                columns={columns}
                rowKey={record => record.id}
                dataSource={this.state.data}
                pagination={this.state.pagination}
                loading={this.state.loading}
                onChange={this.handleTableChange}
                bordered
            />
        );
    }
}

export default TestTable
