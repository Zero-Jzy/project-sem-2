import axios from 'axios';
import jwt_decode from 'jwt-decode';
import { SET_CURRENT_USER } from '../actions/types'

export const loginUser = (user, history) => dispatch => {
    return axios
        .post('/api/login', user)
        .then(res => {
            var token = res.data.token;

            localStorage.setItem('myToken', token);

            axios.defaults.headers.common['Authorization'] = token;

            var decode = jwt_decode(token);
            dispatch(setCurrentUser(decode));
            history.push('/ad')
        })
        .catch(err => {
            alert(err)
        })
};

export const setCurrentUser = (user) => {
    return {
        type: SET_CURRENT_USER,
        payload: user
    }
};

export const logoutUser = () => dispatch => {
    dispatch(setCurrentUser({}));
    delete axios.defaults.headers.common['Authorization'];
    localStorage.removeItem("myToken");
};
