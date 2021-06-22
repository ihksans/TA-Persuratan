import { combineReducers } from 'redux'

import authToken from './auth_reducers'
import User from './user_reducers'
import Path from './path_reducers'
import AllUser from './all_user_reducers'
import AllJenisSurat from './jenis_surat_reducers'
import SuratMasuk from './surat_masuk_reducers'
import RUnitKerja from './unit_kerja_reducers'
import RDerajatSurat from './derajat_surat_reducers'
import RSifatSurat from './sifat_surat_reducers'
const rootReducer = combineReducers({
  authToken,
  User,
  Path,
  AllUser,
  SuratMasuk,
  AllJenisSurat,
  RUnitKerja,
  RDerajatSurat,
  RSifatSurat,
})

export default rootReducer
