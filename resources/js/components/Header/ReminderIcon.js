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
          <button type="submit" className="  w-6	h-10 my-2 mx-3">
            <img
              className=" h-full w-full "
              src="assets/img/icon/Reminder.png"
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
