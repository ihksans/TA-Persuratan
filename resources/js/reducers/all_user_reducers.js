import { SET_ALL_USER } from '../actions'
const INITIAL_STATE = {
  allUserInfo: null,
}
const applySetAllUser = (state, action) => ({
  ...state,
  allUserInfo: action.payload,
})

const applyUnsetAllUser = (state) => ({
  ...state,
  allUserInfo: [],
})

function AllUser(state = INITIAL_STATE, action) {
  switch (action.type) {
    case SET_ALL_USER:
      return applySetAllUser(state, action)
    default:
      return state
  }
}
export default AllUser
