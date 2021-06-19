//List of type variabel
export const ADD_AUTHTOKEN = 'ADD_TOKEN'
export const DEL_AUTHTOKEN = 'DEL_TOKEN'
export const SET_USER = 'SET_USER'
export const UNSET_USER = 'UNSET_USER'
export const SET_PATH = 'SET_PATH'
export const UNSET_PATH = 'UNSET_PATH'
export const SET_ALL_USER = 'SET_ALL_USER'
export const UNSET_ALL_USER = 'UNSET_ALL_USER'

export const SET_ALL_SURAT_MASUK = 'SET_ALL_SURAT_MASUK'
export const UNSET_ALL_SURAT_MASUK = 'UNSET_ALL_SURAT_MASUK'
export const SET_JENIS_SURAT = 'SET_JENIS_SURAT'
export const UNSET_JENIS_SURAT = 'UNSET_JENIS_SURAT'
export const SET_ALL_USER2 = 'SET_ALL_USER2'
//list of method actions
//to save current token by user
export function addTokenByID(payload) {
  const action = {
    type: ADD_AUTHTOKEN,
    payload,
  }
  return action
}
//to remove current token
export function removeTokenByID() {
  const action = {
    type: DEL_AUTHTOKEN,
  }
  return action
}
//to set user current info
export function setUser(payload) {
  const action = {
    type: SET_USER,
    payload,
  }
  return action
}

//to unset user current info

export function unsetUser() {
  const action = {
    type: UNSET_USER,
  }
  return action
}
export function setPath(payload) {
  const action = {
    type: SET_PATH,
    payload,
  }
  return action
}
export function unsetPath() {
  const action = {
    type: UNSET_PATH,
  }
  return action
}
export function setAllUser(payload) {
  const action = {
    type: SET_ALL_USER,
    payload,
  }
  return action
}
export function unsetAllUser() {
  const action = {
    type: UNSET_ALL_USER,
  }
  return action
}
export function setAllSuratMasuk(payload) {
  const action = {
    type: SET_ALL_SURAT_MASUK,
    payload,
  }
  return action
}

export function unsetAllSuratMasuk() {
  const action = {
    type: UNSET_ALL_SURAT_MASUK,
  }
  return action
}

export function setJenisSurat(payload) {
  const action = {
    type: SET_JENIS_SURAT,
    payload,
  }
  return action
}
export function unsetJenisSurat() {
  const action = {
    type: UNSET_JENIS_SURAT,
  }
  return action
}
export function setAllUser2(payload) {
  const action = {
    type: SET_ALL_USER2,
    payload,
  }
  return action
}
