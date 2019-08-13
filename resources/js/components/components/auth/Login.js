import React from 'react';
import { connect } from 'react-redux';
import { loginUser } from '../../redux/actions/authAction';
import _ from 'lodash';

import { Link } from 'react-router-dom'
import { Form, Icon, Input, Button } from 'antd';
import "antd/dist/antd.css";

class Login extends React.Component {
    handleSubmit = e => {
        e.preventDefault();
        this.props.form.validateFields((err, values) => {
            if (!err) {
                this.props.loginUser(values, this.props.history);
                // alert(values);
            }
        });
    };

    componentDidMount() {
        if(this.props.auth.isAuthenticated){
            this.props.history.push('/ad/')
        }
    }

    render() {
        const { getFieldDecorator } = this.props.form;
        return (
            <div className="login-box">
                {!_.isEmpty(this.props.error) && (<p> loi roi</p>)}
                <Form onSubmit={this.handleSubmit} className="login-form">
                    <Form.Item>
                        {getFieldDecorator('name', {
                            rules: [{ required: true, message: 'Please input your name!' }],
                        })(
                            <Input
                                prefix={<Icon type="user" style={{ color: 'rgba(0,0,0,.25)' }} />}
                                placeholder="Name"
                            />,
                        )}
                    </Form.Item>
                    <Form.Item>
                        {getFieldDecorator('password', {
                            rules: [{ required: true, message: 'Please input your Password!' }],
                        })(
                            <Input
                                prefix={<Icon type="lock" style={{ color: 'rgba(0,0,0,.25)' }} />}
                                type="password"
                                placeholder="Password"
                            />,
                        )}
                    </Form.Item>
                    <Form.Item>
                        <Button type="primary" htmlType="submit" className="login-form-button">
                            Sig in
                        </Button>
                    </Form.Item>
                </Form>
                <div className="d-flex justify-content-around" style={{color: "#cccccc"}}><div>Name : admin</div><div>Password: admin</div> </div>
            </div>

        );
    }
}

const LoginForm = Form.create({ name: 'normal_login' })(Login);

const mapStateToProps = state => ({
    auth: state.auth
});

export default connect(mapStateToProps, { loginUser })(LoginForm)

