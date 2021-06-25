//this component for header
import React, { Component } from 'react'
import { connect } from 'react-redux'
import DataReminder from '../Reminder'
import api from '../../service/api'
import { setAllPengingat } from '../../actions'

class ReminderButton extends Component {
  constructor(props) {
    super()
    this.state = {
      Pengingat: [],
    }
    this.showReminder = this.showReminder.bind(this)
    this.getAllPengingat = this.getAllPengingat.bind(this)
  }
  showReminder(){
    this.setState({
      show: !this.state.show,
    })
  }
  async getAllPengingat(){
    await api()
      .get('api/allPengingatInfo')
      .then((response) => {
        // this.props.setAllPengingat([response.data])
        this.props.setAllPengingat(response.data)
        console.log('pengingat:' + this.props.Pengingat.allPengingatInfo)
      })
  }
  componentDidMount() {
    this.getAllPengingat()
  }
  render() {
    return (
      <>
        {this.props.User.currentUser.ROLE == 1 ? (
          <></>
        ) : (
        <div className="flex flex-col">
          <button type="submit" className="justify-items-center w-8	h-6 my-4 mx-2" onClick={this.showReminder}>
            <img
              className=" h-full w-full "
              src="assets/img/icon/surat_icon_2.png"
            />
          </button>
          {this.state.show ? (
              <>
                <div className="relative spacing-0">
                  <div className="absolute right-0 bg-primary shadow-lg overflow-hidden">
                    {this.props.Pengingat.allPengingatInfo == null ? (
                      <DataReminder Pengingat={this.state.Pengingat} />
                    ) : (
                      <DataReminder Pengingat={this.props.Pengingat.allPengingatInfo} />
                    )}
                  </div>
                </div>
              </>
          ) : (
            <></>
          )}
        </div>
        )}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}

export default connect(mapStateToProps, {setAllPengingat})(ReminderButton)
