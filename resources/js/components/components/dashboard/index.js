import React from "react";
import {Row, Col} from 'antd';
import NumberCard from "./NumberCard";
import SetSold from "./SetSold";
import Highstock from '../chart/Hightstock'

export default function Dashboard() {
    return (
        <div style={{margin:25}}>
            <Row gutter={16}>
                <Col span={6}><NumberCard title='Total Revenue' countUp={2} icon={'pay-circle-o'} color={'#64ea91'} number={3234} /></Col>
                <Col span={6}><NumberCard title='Total users' countUp={1} icon={'team'} color={'#8fc9fb'} number={23423}/></Col>
                <Col span={6}><NumberCard title='Total products sold' countUp={2} icon={'shopping-cart'} color={'#f6a6a6'} number={123213}/></Col>
                <Col span={6}><NumberCard countUp={1} icon={'message'} color={'red'} number={99898}/></Col>
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
