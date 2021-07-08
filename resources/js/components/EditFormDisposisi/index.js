import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
// import Kalender from './Kalender'
import ModalLoading from '../ModalLoading'

class EditFormDisposisi extends Component {
  constructor(props) {
    super(props)
    this.state = {}
  }
  render() {
    return (
      <>
        <button
          className="flex flex-row bg-primary font-bold items-center ml-2 mt-1  rounded p-1 h-auto shadow-sm w-auto "
          type="button"
          // onClick={this.handleModal}
        >
          <div className="ml-1">
            <img
              className="h-auto align-middle"
              src="assets/img/icon/Pencil.png"
            />
          </div>
          <div className="font-bold text-putih ml-1 mr-2">
            Edit Data Disposisi{' '}
          </div>
        </button>
      </>
    )
  }
}

export default EditFormDisposisi
