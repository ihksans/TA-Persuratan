//this component for header
import React, { Component } from 'react'
import { connect } from 'react-redux'

class ReminderIcon extends Component {
  constructor(props) {
    super()
    this.state = {}
  }
  render() {
    return (
      <>
        {this.props.User.currentUser.ROLE == 1 ? (
          <></>
        ) : (
          <button type="submit" className="justify-items-center w-8	h-6 my-4 mx-2">
            <img
              className=" h-full w-full "
              src="assets/img/icon/surat_icon_2.png"
            />
          </button>
        )}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}

export default connect(mapStateToProps, null)(ReminderIcon)
