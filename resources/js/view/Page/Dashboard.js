import React, { Component } from 'react'
import Logout from '../../components/Logout'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import { connect } from 'react-redux'
import api from '../../service/api'
import { setAllUser } from '../../actions'
import BoxDataBeranda from '../../components/BoxDataBeranda'
import BoxUserIntro from '../../components/BoxUserIntro'
import Cookies from 'js-cookie'
class Dashboard extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {}
    this.getPenggunaInfo = this.getPenggunaInfo.bind(this)
  }
  async getPenggunaInfo() {
    await api()
      .get('api/allPenggunaInfo')
      .then((response) => {
        this.props.setAllUser(response.data)
        console.log('pengguna:' + this.props.AllUser.allUserInfo)
      })
  }
  componentDidMount() {
    this.getPenggunaInfo()
  }
  render() {
    // console.log("tokenq"+ this.props.authToken.token)
    return (
      //html
      //js
      <>
        <div className="w-full h-5/6 bg-gray-200 p-4">
          <BoxUserIntro />
          {/* <div className=" flex flex-row "></div> */}
          <div className="grid grid-cols-3 gap-4 mt-3">
            <div>
              <BoxDataBeranda
                count={'12'}
                info={'TOTAL SURAT MASUK'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'8'}
                info={'TOTAL SURAT KELUAR'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'6'}
                info={'TOTAL DISPOSISI'}
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
export default connect(mapStateToProps, { setAllUser })(Dashboard)
