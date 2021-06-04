import React, { Component } from 'react'
import Logout from '../../components/Logout'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import { connect } from 'react-redux'

import BoxDataBeranda from '../../components/BoxDataBeranda'
import BoxUserIntro from '../../components/BoxUserIntro'
import Cookies from 'js-cookie'
class Dashboard extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {}
  }

  render() {
    // console.log("tokenq"+ this.props.authToken.token)
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200 p-4	">
          <BoxUserIntro />
          <div className=" flex flex-row "></div>

          <div className="grid grid-cols-3 gap-4 mt-10">
            <div>
              <BoxDataBeranda
                count={'12'}
                info={'Total Surat Masuk'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'12'}
                info={'Total Surat Keluar'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'12'}
                info={'Total Surat Disposisi'}
                icon={'Surat.png'}
              />
            </div>
          </div>
        </div>
      </>
    )
  }
}
function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, null)(Dashboard)
