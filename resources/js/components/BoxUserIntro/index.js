import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

class ClassReducers extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      isNotif: true,
    }
    this.handleX = this.handleX.bind(this)
  }
  handleX() {
    this.setState({
      isNotif: false,
    })
    console.log('isNotif:' + this.state.isNotif)
  }
  render() {
    return (
      //html
      //js
      <>
        {this.state.isNotif ? (
          <div className="grid grid-cols-3 gap-4 bg-birudua h-5% rounded flex justify-start items-center list-none shadow-md">
            <div className="col-span-2 flex justify-start">
              <div className="flex">
                <div className="flex items-center list-none">
                  <div className="text-sm	flex items-center mr-1 ml-4 ">
                    Selamat datang,
                  </div>
                </div>
              </div>
              <div className="flex  items-center">
                <div className="flex items-center list-none">
                  <div className="text-sm	font-bold flex items-center mr-4 ">
                    {this.props.User.currentUser.NAMA}!
                  </div>
                </div>
              </div>
            </div>
            <div className="flex justify-end mr-2.5">
              {/* <div onClick={this.handleX}>
                <img className=" " src="assets/img/icon/x.png" />
              </div> */}
              <button onClick={this.handleX}>
              <img className=" " src="assets/img/icon/x.png" />
              </button>
            </div>
          </div>
        ) : (
          <></>
        )}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, {})(ClassReducers)
