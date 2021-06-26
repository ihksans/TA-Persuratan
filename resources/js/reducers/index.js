import { combineReducers } from 'redux'

import authToken from './auth_reducers'
import User from './user_reducers'
import Path from './path_reducers'
import AllUser from './all_user_reducers'
import AllJenisSurat from './jenis_surat_reducers'
import SuratMasuk from './surat_masuk_reducers'
<<<<<<< HEAD
import RUnitKerja from './unit_kerja_reducers'
import RDerajatSurat from './derajat_surat_reducers'
import RSifatSurat from './sifat_surat_reducers'
=======
import AllDisposisi from './all_disposisi_reducers'
import RUnitKerja from './unit_kerja_reducers'
import RDerajatSurat from './derajat_surat_reducers'
import RSifatSurat from './sifat_surat_reducers'
// import AllPencatatan from './all_pencatatan_reducers'

>>>>>>> dev-satria2
const rootReducer = combineReducers({
  authToken,
  User,
  Path,
  AllUser,
  SuratMasuk,
  AllJenisSurat,
<<<<<<< HEAD
  RUnitKerja,
  RDerajatSurat,
  RSifatSurat,
=======
  AllDisposisi,
  RUnitKerja,
  RDerajatSurat,
  RSifatSurat,
  // AllPencatatan,
>>>>>>> dev-satria2
})

export default rootReducer
