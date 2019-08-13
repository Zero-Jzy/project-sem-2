import { SET_CURRENT_USER } from '../actions/types'
import _ from 'lodash'
var initialState = {
    user: {},
    isAuthenticated : false
};

export default (state = initialState, action) => {

    console.log('payload',action.payload);

    switch (action.type) {
        case SET_CURRENT_USER:
            return {
                user: action.payload,
                isAuthenticated: !(_.isEmpty(action.payload))
            };
        default:
            return state;
    }
}
