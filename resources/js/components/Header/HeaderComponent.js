//this component for header
import React, { Component } from 'react'
import { connect } from 'react-redux'
import * as FaIcons from 'react-icons/fa'
import { Link } from 'react-router-dom'
import DataUser from './DataUser'
import UserButton from './UserButton'
import ReminderIcon from './ReminderIcon'
// class HeaderComponent extends Component {
//   constructor(props) {
//     super()
//     this.state = {}
//   }
//   render() {
//     return (

//     )
//   }
// }

// function mapStateToProps(state) {
//   return state
// }

// export default connect(mapStateToProps, null)(HeaderComponent)

const HeaderComponent = ({ show, role }) => {
  const on = () => {
    show()
  }
  const handleSubmit = () => {
    show()
  }
  return (
    <>
      <>
        <div className="grid grid-cols-3 gap-4  h-7% border border-gray-400 ">
          <div className="col-span-2 flex justify-start">
            <Link to="#">
              <button type="submit" className=" w-full " onClick={handleSubmit}>
                <img
                  className=" h-full w-full "
                  src="assets/img/icon/Menu.png"
                />
              </button>
            </Link>
            {/* <div className="border-1 border-gray-400  font-semibold ">
              Aplikasi Pengelolaan Surat Kemahasiswaan
            </div> */}
          </div>
          <div className="flex justify-end border-1 border-gray-400">
            <div className="border-1 border-gray-400 ">
              <DataUser />
            </div>
            <UserButton />

            <ReminderIcon />
            <button type="submit" className=" w-6	h-10 my-2 mx-3">
              <img className=" h-full w-full " src="assets/img/icon/Bell.png" />
            </button>
          </div>
        </div>
      </>
    </>
  )
}
export default HeaderComponent
