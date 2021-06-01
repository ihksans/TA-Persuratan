import { combineReducers } from 'redux'

import authToken from './auth_reducers'

const rootReducer = combineReducers({
  authToken,
})

export default rootReducer
