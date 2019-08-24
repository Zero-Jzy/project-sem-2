import React from "react";
import {Row, Col} from 'antd';
import NumberCard from "./NumberCard";
import Highstock from '../chart/Hightstock'

export default function Dashboard() {
    return (
        <div style={{margin:25}}>
            <Row gutter={16}>
                <Col span={6}><NumberCard countUp={2} icon={'pay-circle-o'} color={'blue'} number={3234} /></Col>
                <Col span={6}><NumberCard countUp={1} icon={'team'} color={'red'} number={23423}/></Col>
                <Col span={6}><NumberCard countUp={2} icon={'shopping-cart'} color={'green'} number={123213}/></Col>
                <Col span={6}><NumberCard countUp={1} icon={'message'} color={'red'} number={99898}/></Col>
            </Row>
            <Row gutter={16}>
                <Col span={18}>
                    <Highstock/>
                </Col>
                <Col span={6}>

                </Col>
            </Row>
        </div>

    )
}
