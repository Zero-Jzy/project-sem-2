import React, {Component} from 'react'
import {
    Form,
    Input,
    Select,
    Row,
    Col,
    Button,
    Popconfirm,
    InputNumber,
    message,
} from 'antd';
import UploadImage from '../common/UploadImage'

const {Option} = Select;

class MyCreateSetForm extends Component {
    state = {
        visible: true,
        submitting: false,
        fileList: [],
        foods: [],
        loading: false
    };

    componentWillReceiveProps(nextProps, nextContext) {
        if (this.state.foods.length <= 0) {
            this.setState({
                foods: nextProps.recordSelected.map(food => ({id: food.id, quantity: 1}))
            })
        }
    }

    updateFileList = (fileList) => {
        this.setState({fileList: fileList})
    };

    removeImage = () => {
        this.setState({
            fileList: [],
            foods: []
        });
        this.props.form.setFieldsValue({
            foods: []
        });
    };

    foods = this.props.recordSelected.map(food => ({
        id: food.id,
        quantity: 1
    }));

    handleSubmit = e => {
        e.preventDefault();
        this.setState({
            loading: true
        })
        this.props.form.validateFieldsAndScroll((err, values) => {
            if (!err) {
                axios.post('/api/set', values)
                    .then(res => {
                        this.setState({
                            loading: false
                        });
                        if (res.status === 200) {
                            this.props.form.resetFields();
                            this.removeImage();
                            this.props.handleCancel();
                            message.success("Create set success!")
                        }
                    })
                    .catch(err => {
                        alert(err);
                        this.setState({
                            loading: false
                        })
                    });

                console.log('Received values of form: ', values);
            }
        });
    };

    handleCancel = () => {
        this.props.handleCancel()
    };

    handleChangeQuantity = (value, id) => {
        var foods = this.state.foods;
        let newFoods = foods.map(food => food.id === id ? {...food, quantity: value} : {...food});
        this.setState({foods: newFoods});

        this.props.form.setFieldsValue({
            foods: newFoods
        });
    };

    render() {
        const {getFieldDecorator} = this.props.form;

        const {recordSelected} = this.props;

        const formItemLayout = {}

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
                            {getFieldDecorator('category_id', {
                                rules: [{required: true, message: 'Please select dish category!'}],
                            })(
                                <Select
                                    placeholder="Select a dish category!"
                                    onChange={this.handleSelectChange}
                                >
                                    <Option value="1">1</Option>
                                    <Option value="2">2</Option>
                                    <Option value="3">3</Option>
                                </Select>
                            )}
                        </Form.Item>
                    </Col>
                </Row>
                <Form.Item className="m-0 p-0">
                    {getFieldDecorator('foods', {
                        initialValue: this.state.foods,
                        rules: [{required: true, message: 'Please select food!'}],
                    })(<Input type='hidden'/>)}
                </Form.Item>

                {recordSelected.map(item => (
                    <div key={item.id}>
                        {item.name}
                        {getFieldDecorator(`quantity:${item.id}`,{
                            initialValue: 1,
                        })(<InputNumber
                            min={1}
                            onChange={value => this.handleChangeQuantity(value, item.id)}
                            size="small"/>)}

                    </div>
                ))}

                <Form.Item label="Images">
                    <UploadImage
                        updateFileList={this.updateFileList}
                        fileList={this.state.fileList}
                        getFieldDecorator={getFieldDecorator}
                    />
                </Form.Item>

                <Form.Item wrapperCol={{span: 10, offset: 14}} style={{margin: 0}}>
                    <Popconfirm className='mr-3' placement="top" title={'Cancel ?'} onConfirm={this.handleCancel}
                                okText="Yes" cancelText="No">
                        <Button>Cancel</Button>
                    </Popconfirm>
                    <Button type="primary" loading={this.state.loading} htmlType="submit">
                        Submit
                    </Button>
                </Form.Item>
            </Form>
        );
    }
}

const CreateSetForm = Form.create({name: 'register'})(MyCreateSetForm);

export default CreateSetForm
