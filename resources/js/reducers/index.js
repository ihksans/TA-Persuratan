import { combineReducers } from 'redux'

import authToken from './auth_reducers'
import User from './user_reducers'
import Path from './path_reducers'
import AllUser from './all_user_reducers'
const rootReducer = combineReducers({
  authToken,
  User,
  Path,
  AllUser,
})

export default rootReducer
