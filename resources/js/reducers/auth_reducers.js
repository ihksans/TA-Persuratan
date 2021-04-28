//reducer for auth
import authToken_json from '../data/authToken_json.json'; 
// add a actions 
import {ADD_AUTHTOKEN} from '../actions';

const INITIAL_STATE = {
    authToken: null
  };
  const applySetUserType = (state, action) => ({
    ...state,
    token: action.payload
  });
function authToken(state = INITIAL_STATE, action){
    switch (action.type) {
        case ADD_AUTHTOKEN:
            // state.pop('authValue')
            // let authToken=state.push({'authValue':action.newValue});
            // let authToken = action.newValue
            // state = [...state, action.newValue]
            // return state;
            return applySetUserType(state, action);

        default:
            return state;
    }
}

export default authToken;