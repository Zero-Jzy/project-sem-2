import React, {useEffect, useState} from 'react'
import {Table, Tag} from 'antd'
import axios from 'axios'

function SetSold() {
    const color = ['#64ea91', '#f69898', '#8fc8fb', '#f8c82f'];

    const [data, setData] = useState([]);

    const randomColor = () => {
        return color[Math.floor(Math.random() * 4)];
    };

    useEffect(() => {
        axios.get('api/test_data')
            .then(res => {
                setData([
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10},
                    {name: 'test', percent: 10}
                    ])
            })
    }, []);

    const columns = [
        {
            title: 'name',
            dataIndex: 'name'
        },
        {
            title: 'percent',
            dataIndex: 'percent',
            className: 'd-flex justify-content-end',
            render: percent => <Tag color={randomColor()}>{percent}%</Tag>,
        },
    ];
    return (
        <div style={{padding: 25, background: "white"}}>
            <Table
                pagination={false}
                showHeader={false}
                columns={columns}
                rowKey={(record, key) => key}
                dataSource={data}
                scroll={{y: 350}}
            />
        </div>

    )
}

export default SetSold
