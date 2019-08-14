import React from 'react'
import { Icon, Card } from 'antd'
import CountUp from 'react-countup'
import './numberCard.css'

function NumberCard({ icon, color, title, number, countUp }) {
    return (
        <Card
            className={'numberCard'}
            bordered={false}
            bodyStyle={{ padding: 10 }}
        >
            <Icon className={'iconWarp'} style={{ color }} type={icon} />
            <div className={'content'}>
                <p className={'title'}>{title || 'No Title'}</p>
                <p className={'number'}>
                    <CountUp
                        start={0}
                        end={number}
                        duration={2.75}
                        useEasing
                        useGrouping
                        separator=","
                        {...(countUp || {})}
                    />
                </p>
            </div>
        </Card>
    )
}


export default NumberCard
