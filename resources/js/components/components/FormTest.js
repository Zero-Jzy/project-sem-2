import React, {Component} from 'react';
import hanhchinhvn from '../hanhchinhvn.json';
import {Upload, Icon, message, Button, Cascader} from 'antd';
import axios from 'axios'

export const FormTest = props => {
    return (
        <div>
            <Cascader
                style={{width: '50%'}}
                // defaultValue={['zhejiang', 'hangzhou', 'xihu']}
                options={hanhchinhvn}
                onChange={values => console.log(values)}
                changeOnSelect
            />,
        </div>
    )
}


export class UploadImage2 extends Component {
    constructor(props){
        super(props);
        this.state = {
            listIdImage : []
        };
    }

    onChange = (info) => {
        console.log(info)
        if (info.file.status !== 'uploading') {
            // console.log(info.file, info.fileList);
        }
        if (info.file.status === 'done') {
            message.success(`${info.file.name} file uploaded successfully`);
            // this.setState({
            //     listIdImage: this.state.listIdImage.concat(id)
            // })
        } else if (info.file.status === 'error') {
            message.error(`${info.file.name} file upload failed.`);
        }
    }

     propss = {
        name: 'images',
        multiple: true,
        listType: 'picture',
        onChange: this.onChange
    };
    render() {
        return (
            <div>
                <Upload {...this.propss}>
                    <Button>
                        <Icon type="upload"/> Click to Upload
                    </Button>
                </Upload>
            </div>


        )
    }
}


