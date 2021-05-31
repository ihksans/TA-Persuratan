import { combineReducers } from 'redux'

import authToken from './auth_reducers'
import User from './user_reducers'
const rootReducer = combineReducers({
  authToken,
  User,
})

export default rootReducer
