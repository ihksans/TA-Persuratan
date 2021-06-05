import { combineReducers } from 'redux'

import authToken from './auth_reducers'
import User from './user_reducers'
import Path from './path_reducers'
const rootReducer = combineReducers({
  authToken,
  User,
  Path,
})

export default rootReducer
