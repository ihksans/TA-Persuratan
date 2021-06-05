//component logout
import React, { Component, useState } from 'react'
import { removeTokenByID, unsetUser } from '../../actions'
import { logoutAuth } from '../../service/auth'
import { connect } from 'react-redux'

class Logout extends Component {
  constructor(props) {
    super(props)
    this.state = {}
    this.removeToken = this.removeToken.bind(this)
    this.unsetCurrentUser = this.unsetCurrentUser.bind(this)
  }
  signOut() {
    logoutAuth()
    this.removeToken()
    this.unsetCurrentUser()
  }
  removeToken() {
    this.props.removeTokenByID()
    this.props.unsetUser()

    logoutAuth()
  }
  unsetCurrentUser() {
    console.log('unset user')
    this.props.unsetUser()
  }
  render() {
    // console.log("last token:"+ this.props.authToken.token);

    return (
      <>
        <p>{this.props.authToken.token}</p>

        <div className="mt-6">
          <button
            type="submit"
            onClick={this.removeToken}
            className="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
          >
            <span className="absolute left-0 inset-y-0 flex items-center pl-3">
              <svg
                className="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fillRule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clipRule="evenodd"
                />
              </svg>
            </span>
            Logout
          </button>
        </div>
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, { removeTokenByID, unsetUser })(Logout)
