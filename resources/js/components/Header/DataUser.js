//this component for header
import React, { Component } from 'react'
import { connect } from 'react-redux'

class DataUser extends Component {
  constructor(props) {
    super()
    this.state = {}
  }
  render() {
    return (
      <>
        <div className="border-1 border-gray-400 font-semibold">
          {this.props.User.currentUser.NAMA}
        </div>
        <div className="border-1 border-gray-400 text-sm font-semibold">
          {this.props.User.currentUser.ROLE == 1
            ? 'Administrator'
            : 'Staff Pengguna'}
        </div>
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}

export default connect(mapStateToProps, null)(DataUser)
