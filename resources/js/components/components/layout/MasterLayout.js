import React, {Component} from 'react'
import {connect} from 'react-redux'
import {logoutUser} from '../../redux/actions/authAction'
import {Layout, Menu, Icon, Dropdown, Avatar, Badge, Breadcrumb} from 'antd'
import {Link} from 'react-router-dom'
import {withRouter} from "react-router"

import logo from "../../logo.png";

const {Header, Sider, Content, Footer} = Layout;
const {SubMenu} = Menu;


const notification = (
    < Menu>
        <Menu.Item key="11">logout</Menu.Item>
        <Menu.Item key="12">logout</Menu.Item>
        <Menu.Item key="13">logout</Menu.Item>
    </Menu>
)


class MasterLayout extends Component {

    menu = (
        <Menu>
            <Menu.Item key="1" onClick={this.props.logoutUser}>logout</Menu.Item>
        </Menu>
    );

    state = {
        collapsed: false
    };

    toggle = () => {
        this.setState({
            collapsed: !this.state.collapsed
        });
    };

    breadcrumb = [
        {name: 'User', icon: 'user', path: 'user'},
        {name: 'Dashboard', icon: 'dashboard'}
    ];

    header = React.createRef();

    componentDidMount() {
        console.log(this.header.current)
    }


    render() {
        return (
            <div>
                <Layout>
                    <Sider theme="light" width='250' trigger={null} collapsible collapsed={this.state.collapsed}
                           style={{minHeight: '100vh', minWidth: 400}}>
                        <div className="logo">
                            <img src={logo} width='64px' alt='Logo'/>
                        </div>
                        <Menu className="menu-sidebar" mode="inline"
                              defaultSelectedKeys={[this.props.location.pathname.slice(1)]}>
                            <Menu.Item key="ad">
                                <Link to="/ad">
                                    <Icon type="dashboard"/>
                                    <span>Dashboard</span>
                                </Link>
                            </Menu.Item>
                            <Menu.Item key="ad/user">
                                <Link to="/ad/user">
                                    <Icon type="user"/>
                                    <span>User</span>
                                </Link>
                            </Menu.Item>
                            <Menu.Item key="ad/form">
                                <Link to="/ad/form">
                                    <Icon type="form"/>
                                    <span>From</span>
                                </Link>
                            </Menu.Item>
                            <SubMenu
                                key="sub2"
                                title={
                                    <span>
                                    <Icon type="android"/>
                                    <span>:v</span>
                                  </span>
                                }
                            >
                                <Menu.Item key="6">Tom</Menu.Item>
                                <Menu.Item key="7">Bill</Menu.Item>
                            </SubMenu>
                        </Menu>
                    </Sider>
                    <Layout className="right-page">
                        <Header className="header" ref={this.header}>
                            <Icon
                                className="trigger"
                                type={this.state.collapsed ? 'menu-unfold' : 'menu-fold'}
                                onClick={this.toggle}
                            />
                            <div className="right_header">
                                <Dropdown className="notification_icon" overlay={notification}>
                                      <span className="right_header_item">
                                        <Badge count={5} dot={true}>
                                          <Icon style={{fontSize: "1.7em"}} type="bell"/>
                                        </Badge>
                                      </span>
                                </Dropdown>
                                <Dropdown overlay={this.menu}>
                                      <span className="right_header_item">
                                        <span className="username">{this.props.user.name}</span>
                                        <Avatar src={this.props.user.avatar}/>
                                      </span>
                                </Dropdown>
                            </div>
                        </Header>
                        <div>
                            <Breadcrumb style={{margin: '24px 0 0 16px'}}>
                                <Breadcrumb.Item><Icon type='dashboard'/> Dashboard</Breadcrumb.Item>
                                {this.props.location.pathname.slice(1).split('/').map(e => {
                                    return <Breadcrumb.Item key={e}><Icon type={e}/> {e}</Breadcrumb.Item>
                                })}
                            </Breadcrumb>
                            <Content
                                style={{
                                    margin: '24px 16px',
                                    padding: 24,
                                    minHeight: 200,
                                    overflow: 'initial'
                                }}
                            >
                                {this.props.children}
                            </Content>
                            <Footer style={{textAlign: 'center'}}>

                                Ant Design ©2019 Created by Ant UED
                            </Footer>
                        </div>
                    </Layout>

                </Layout>
            </div>
        )
    }
}

// export default withRouter(MasterLayout);

const mapStateToProps = state => ({
    user: state.auth.user
})

export default connect(mapStateToProps, {logoutUser})(withRouter(MasterLayout));
