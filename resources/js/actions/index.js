//List of type variabel
export const ADD_AUTHTOKEN = 'ADD_TOKEN'
export const DEL_AUTHTOKEN = 'DEL_TOKEN'
//list of method actions
export function addTokenByID(payload) {
  const action = {
    type: ADD_AUTHTOKEN,
    payload,
  }
  return action
}
export function removeTokenByID() {
  const action = {
    type: DEL_AUTHTOKEN,
  }
  return action
}
