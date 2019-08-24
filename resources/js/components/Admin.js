import ReactDOM from 'react-dom'
import React from 'react'
import store from './redux/store'
import jwt_decode from 'jwt-decode'
import {Provider} from 'react-redux'
import MasterLayout from './components/layout/MasterLayout'
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom'
import PrivateRoute from "./components/common/PrivateRoute";
import UserTable from './components/table/UserTable'
import UserDetail from './components/UserDetail';
import FormTest from './components/FormTest'
import LoginForm from "./components/auth/Login";

import Dashboard from "./components/dashboard";
import { setCurrentUser, logoutUser } from './redux/actions/authAction'

import 'antd/dist/antd.css'
import './App.css'

if (localStorage.myToken) {

    axios.defaults.headers.common['Authorization'] = localStorage.myToken;
    const decoded = jwt_decode(localStorage.myToken);
    store.dispatch(setCurrentUser(decoded));

    const currentTime = Date.now() / 1000;
    if (decoded.exp < currentTime) {
        store.dispatch(logoutUser());
        // store.dispatch(clearCurrentProfile());
        // window.location.href = '/ad/login';
    }
}

export default class Admin extends React.Component {
    render() {
        return (
            <Provider store={store}>
                <Router>
                    <Switch>
                        <Route exact path={['/ad/login']}>
                            <Route exact path="/ad/login" component={LoginForm}/>
                        </Route>
                        <Route exact path={['/ad', '/ad/user', '/ad/form', '/ad/user/:id']}>
                            <MasterLayout>
                                <PrivateRoute exact path="/ad" component={Dashboard}/>
                                <PrivateRoute exact path="/ad/user" component={UserTable}/>
                                <PrivateRoute exact path="/ad/form" component={FormTest}/>
                                <PrivateRoute exact path="/ad/user/:id" component={UserDetail}/>
                            </MasterLayout>
                        </Route>
                    </Switch>
                </Router>
            </Provider>
        )
    }
}


if (document.getElementById('app')) {
    ReactDOM.render(<Admin/>, document.getElementById('app'));
}
