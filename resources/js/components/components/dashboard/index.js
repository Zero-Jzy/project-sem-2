import React, {useState, useEffect} from "react";
import {Row, Col} from 'antd';
import NumberCard from "./NumberCard";
import SetSold from "./SetSold";
import axios from 'axios'
import Highstock from '../chart/Hightstock'

export default function Dashboard() {
     const [data, setData] = useState({
         orderCount: 0,
         revenue: 0,
         setCount: 0,
         userCount: 0
     });

     useEffect(() => {
         axios.get('api/dashboard/total')
             .then(res => {
                 setData(res.data);
                 console.log(res.data)
             })
     },[])

    return (
        <div style={{margin:25}}>
            <Row gutter={16}>
                <Col span={6}><NumberCard title='Total Revenue' countUp={2} icon={'pay-circle-o'} color={'#64ea91'} number={data.revenue} /></Col>
                <Col span={6}><NumberCard title='Total users' countUp={1} icon={'team'} color={'#8fc9fb'} number={data.userCount}/></Col>
                <Col span={6}><NumberCard title='Total products sold' countUp={2} icon={'shopping-cart'} color={'#f6a6a6'} number={data.setCount}/></Col>
                <Col span={6}><NumberCard title={'Total order'} countUp={1} icon={'check-square'} color={'#d897eb'} number={data.orderCount}/></Col>
            </Row>
            <Row gutter={16}>
                <Col span={18}>
                    <Highstock/>
                </Col>
                <Col span={6}>
                    <SetSold/>
                </Col>
            </Row>
        </div>

    )
}
