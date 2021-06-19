import { combineReducers } from 'redux'

import authToken from './auth_reducers'
import User from './user_reducers'
import Path from './path_reducers'
import AllUser from './all_user_reducers'
import AllJenisSurat from './jenis_surat_reducers'
import SuratMasuk from './surat_masuk_reducers'
const rootReducer = combineReducers({
  authToken,
  User,
  Path,
  AllUser,
  SuratMasuk,
  AllJenisSurat,
})

export default rootReducer
