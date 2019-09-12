import React, {Component} from 'react';
import hanhchinhvn from '../hanhchinhvn.json';
import {Upload, Icon, message, Button, Cascader} from 'antd';
import axios from 'axios'

export default class FormTest extends Component {
    render() {
        return (
            <div style={{padding: 25, margin: 25, background: 'white'}}>
                <Upload
                    name='images'
                    action='/api/upload-image'
                    listType='picture-card'
                    multiple={true}
                    onChange={(a) => console.log(a)}
                >
                    <div>
                        <Icon type="plus" />
                        <div className="ant-upload-text">Upload</div>
                    </div>
                </Upload>

                {/*<Cascader*/}
                {/*    style={{width: '50%'}}*/}
                {/*    // defaultValue={['zhejiang', 'hangzhou', 'xihu']}*/}
                {/*    options={hanhchinhvn}*/}
                {/*    onChange={values => console.log(values)}*/}
                {/*    changeOnSelect*/}
                {/*/>,*/}
            </div>
        )
    }
}



