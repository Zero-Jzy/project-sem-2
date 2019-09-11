import React, {Component} from 'react'
import axios from 'axios'
import {
    Form,
    Input,
    InputNumber,
    Select,
    Row,
    Col,
    Button,
    Upload,
    Icon,
    Popconfirm
} from 'antd';
import UploadImage from '../common/UploadImage'

const {Option} = Select;

const vitaminsData = ['B1', 'B2', 'B3', 'B5', 'B6', 'B9', 'B12', 'H', 'C', 'A', 'D', 'E', 'K'];
const mineralsData = ['Ca', 'Cl', 'Mg', 'K', 'Na', 'Cr', 'Cu', 'F', 'I', 'Fe', 'Mn', 'Se', 'Zn'];
const vitamins = [];
const minerals = [];

for (let vitamin of vitaminsData) {
    vitamins.push(<Option key={vitamin}>{vitamin}</Option>);
}

for (let mineral of mineralsData) {
    minerals.push(<Option key={mineral}>{mineral}</Option>);
}

class MyCreateFoodForm extends Component {
    state = {
        visible: true,
        submitting: false,
        fileList: [],
        imageKey: null
    };

    updateFileList = (fileList) => {
        this.setState({fileList: fileList})
    };

    removeImage = () => {
        this.setState({fileList: []})
    };

    handleSubmit = e => {
        e.preventDefault();
        this.props.form.validateFieldsAndScroll((err, values) => {

            if (!err) {
                axios.post('/api/food', values)
                    .then(res => {
                        this.props.form.resetFields();
                        this.removeImage()
                    })
                    .catch(err => {

                    });
                console.log('Received values of form: ', values);
            }
        });
    };

    handleCancel = () => {
        this.props.form.resetFields();
        this.removeImage();
        this.props.handleCancel()
    };

    handleChangeImage = info => {
        this.setState({
            imageKey : info.file.respone
        })
    };

    render() {
        const {getFieldDecorator} = this.props.form;

        const formItemLayout = {
            // labelCol: { span: 6 },
            // wrapperCol: { span: 18 },
        };


        return (
            <Form {...formItemLayout} layout={'vertical'} onSubmit={this.handleSubmit}>
                {/*<Row gutter={16}>*/}
                {/*    <Col sm={12}>*/}
                {/*        <Form.Item label='Name'>*/}
                {/*            {getFieldDecorator('name', {*/}
                {/*                rules: [*/}
                {/*                    {*/}
                {/*                        required: true,*/}
                {/*                        message: 'Please input dish name',*/}
                {/*                    },*/}
                {/*                ],*/}
                {/*            })(<Input/>)}*/}
                {/*        </Form.Item>*/}
                {/*    </Col>*/}
                {/*    <Col sm={12}>*/}
                {/*        <Form.Item label="Category">*/}
                {/*            {getFieldDecorator('category', {*/}
                {/*                rules: [{required: true, message: 'Please select dish category!'}],*/}
                {/*            })(*/}
                {/*                <Select*/}
                {/*                    placeholder="Select a dish category!"*/}
                {/*                    onChange={this.handleSelectChange}*/}
                {/*                >*/}
                {/*                    <Option value="1">1</Option>*/}
                {/*                    <Option value="2">2</Option>*/}
                {/*                </Select>*/}
                {/*            )}*/}
                {/*        </Form.Item>*/}
                {/*    </Col>*/}
                {/*</Row>*/}
                {/*<Row gutter={16}>*/}
                {/*    <Col span={8}>*/}
                {/*        <Form.Item label={'Calo (g)'}>*/}
                {/*            {getFieldDecorator('calo', {*/}
                {/*                rules: [*/}
                {/*                    {*/}
                {/*                        required: true,*/}
                {/*                        message: 'Please input calo',*/}
                {/*                    },*/}
                {/*                ],*/}
                {/*            })(<InputNumber style={{width: '100%'}} min={0}/>)}*/}
                {/*        </Form.Item>*/}
                {/*    </Col>*/}
                {/*    <Col span={8}>*/}
                {/*        <Form.Item label={'Protein (g)'}>*/}
                {/*            {getFieldDecorator('proteint', {*/}
                {/*                rules: [*/}
                {/*                    {*/}
                {/*                        required: true,*/}
                {/*                        message: 'Please input proteint',*/}
                {/*                    },*/}
                {/*                ],*/}
                {/*            })(<InputNumber style={{width: '100%'}} min={0}/>)}*/}
                {/*        </Form.Item>*/}
                {/*    </Col>*/}
                {/*    <Col span={8}>*/}
                {/*        <Form.Item label={'Carbohydrate (g)'}>*/}
                {/*            {getFieldDecorator('carbohydrate', {*/}
                {/*                rules: [*/}
                {/*                    {*/}
                {/*                        required: true,*/}
                {/*                        message: 'Please input carbohydrate',*/}
                {/*                    },*/}
                {/*                ],*/}
                {/*            })(<InputNumber style={{width: '100%'}} min={0}/>)}*/}
                {/*        </Form.Item>*/}
                {/*    </Col>*/}
                {/*    <Col span={8}>*/}
                {/*        <Form.Item label={'Dietary Fiber (g)'}>*/}
                {/*            {getFieldDecorator('dietary_fiber', {*/}
                {/*                rules: [*/}
                {/*                    {*/}
                {/*                        required: true,*/}
                {/*                        message: 'Please input dietary fiber',*/}
                {/*                    },*/}
                {/*                ],*/}
                {/*            })(<InputNumber style={{width: '100%'}} min={0}/>)}*/}
                {/*        </Form.Item>*/}
                {/*    </Col>*/}
                {/*    <Col span={8}>*/}
                {/*        <Form.Item label={'Fat intaket (g)'}>*/}
                {/*            {getFieldDecorator('fat_intaket', {*/}
                {/*                rules: [*/}
                {/*                    {*/}
                {/*                        required: true,*/}
                {/*                        message: 'Please input fat intaket',*/}
                {/*                    },*/}
                {/*                ],*/}
                {/*            })(<InputNumber style={{width: '100%'}} min={0}/>)}*/}
                {/*        </Form.Item>*/}
                {/*    </Col>*/}
                {/*</Row>*/}
                {/*<Form.Item label="Vitamins">*/}
                {/*    {getFieldDecorator('vitamins', {*/}
                {/*        rules: [{required: true, message: 'Please input vitamins!'}],*/}
                {/*    })(<Select*/}
                {/*        mode="multiple"*/}
                {/*        style={{width: '100%'}}*/}
                {/*        placeholder="Please select"*/}
                {/*    >*/}
                {/*        {vitamins}*/}
                {/*    </Select>)}*/}
                {/*</Form.Item>*/}
                {/*<Form.Item label="Minerals">*/}
                {/*    {getFieldDecorator('minerals', {*/}
                {/*        rules: [{required: true, message: 'Please input minerals!'}],*/}
                {/*    })(<Select*/}
                {/*        mode="multiple"*/}
                {/*        style={{width: '100%'}}*/}
                {/*        placeholder="Please select"*/}
                {/*    >*/}
                {/*        {minerals}*/}
                {/*    </Select>)}*/}
                {/*</Form.Item>*/}
                <Form.Item label="Image">
                   <UploadImage
                       getFieldDecorator={getFieldDecorator}
                       updateFileList={this.updateFileList}
                       fileList={this.state.fileList}
                   />
                </Form.Item>
                <Form.Item wrapperCol={{span: 10, offset: 16}} style={{margin: 0}}>
                    <Popconfirm className='mr-3' placement="top" title={'Cancel ?'} onConfirm={this.handleCancel}
                                okText="Yes" cancelText="No">
                        <Button>Cancel</Button>
                    </Popconfirm>
                    <Button type="primary" htmlType="submit">
                        Submit
                    </Button>
                </Form.Item>
            </Form>
        );
    }
}

const CreateFoodForm = Form.create({name: 'register'})(MyCreateFoodForm);

export default CreateFoodForm
