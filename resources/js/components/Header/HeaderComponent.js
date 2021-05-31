//this component for header
import React, { Component } from 'react'
import { connect } from 'react-redux'

class HeaderComponent extends Component {
  constructor(props) {
    super()
    this.state = {}
  }
  render() {
    return (
      <>
        <div className="grid grid-cols-3 gap-4  h-5% border border-gray-400">
          <div className="col-span-2 flex justify-start">
            <div className="border-1 border-gray-400">=</div>
            <div className="border-1 border-gray-400  font-semibold">
              NAMA APLIKASI
            </div>
          </div>
          <div className="flex justify-end border-1 border-gray-400">
            <div className="border-1 border-gray-400 ">
              {/* <div className="border-1 border-gray-400  font-semibold">
              Satria Nata
            </div> */}
              <div className="border-1 border-gray-400  font-semibold">
                {this.props.User.currentUser.NAMA}
              </div>
              <div className="border-1 border-gray-400 text-sm ">
                {this.props.User.currentUser.ROLE == 1
                  ? 'Administrator'
                  : 'Staff Pengguna'}
              </div>
            </div>

            <div className="border-1 border-gray-400">Foto</div>
            <div className="border-1 border-gray-400">Surat</div>
            <div className="border-1 border-gray-400">Bel</div>
          </div>
        </div>
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}

export default connect(mapStateToProps, null)(HeaderComponent)
