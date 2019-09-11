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


class MyCreateSetForm extends Component {
    state = {
        visible: true,
        submitting: false,
        fileList: []
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

    render() {
        const {getFieldDecorator} = this.props.form;

        const formItemLayout = {
            // labelCol: { span: 6 },
            // wrapperCol: { span: 18 },
        };


        return (
            <Form {...formItemLayout} layout={'vertical'} onSubmit={this.handleSubmit}>
                <Row gutter={16}>
                    <Col sm={12}>
                        <Form.Item label='Name'>
                            {getFieldDecorator('name', {
                                rules: [
                                    {
                                        required: true,
                                        message: 'Please input dish name',
                                    },
                                ],
                            })(<Input/>)}
                        </Form.Item>
                    </Col>
                    <Col sm={12}>
                        <Form.Item label="Category">
                            {getFieldDecorator('category', {
                                rules: [{required: true, message: 'Please select dish category!'}],
                            })(
                                <Select
                                    placeholder="Select a dish category!"
                                    onChange={this.handleSelectChange}
                                >
                                    <Option value="1">1</Option>
                                    <Option value="2">2</Option>
                                </Select>
                            )}
                        </Form.Item>
                    </Col>
                </Row>
                <Form.Item label="Foods">
                    {getFieldDecorator('foods', {
                        initialValue: '',
                        rules: [{required: true, message: 'Please input vitamins!'}],
                    })(<Input type='text' />)}
                </Form.Item>

                <Form.Item label="Images">
                    <UploadImage
                        updateFileList={this.updateFileList}
                        fileList={this.state.fileList}
                        getFieldDecorator={getFieldDecorator}
                    />
                    {this.props.form.getFieldError('images')}
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

const CreateSetForm = Form.create({name: 'register'})(MyCreateSetForm);

export default CreateSetForm
