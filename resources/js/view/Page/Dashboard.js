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
import axios from 'axios'
import {
  setAllSuratMasuk,
  setJenisSurat,
  setUnitKerja,
  setDerajatSurat,
  setSifatSurat,
  setAllPengingat,
} from '../../actions'
class Dashboard extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      SuratMasuk:[],
      SuratKeluar:[],
      Disposisi: [],
      // long:' ',
    }
    this.getPenggunaInfo = this.getPenggunaInfo.bind(this)
    // this.getDataSuratMasuk = this.getDataSuratMasuk.bind(this)
  }
  async getPenggunaInfo() {
    await api()
      .get('api/allPenggunaInfo')
      .then((response) => {
        this.props.setAllUser(response.data)
        console.log('pengguna:' + this.props.AllUser.allUserInfo)
      })
    axios
    .get('api/showData')
    .then(res=>{
      this.setState({
        SuratMasuk: res.length,
        
        
      })
      console.log('data '+ this.state.SuratMasuk)
    })
    // .then((response)=>{
    //   this.props.setAllSuratMasuk(response.data)
    //   const panjang = response.data
    //   // const banyakSuratMasuk = response.data.content;
    //   // this.setState({banyakSuratMasuk})
    // })
    
    // await api()
    //   .get('api/getAllSuratMasuk')
    //   .then((result) => {
    //     result.json().then((resp)=>{
    //       console.log(resp);
    //     })
    //     this.setState({
    //       SuratMasuk: response.data.content,
    //     })
    //     this.props.setAllSuratMasuk(response.data.content)
    //   })
    
  }
  // async getDataSuratMasuk(){
    // await api()
    // .get('api/getAllSuratMasuk')
    // .then((response)=>{
    //   this.setState({
    //     SuratMasuk:response.data.length,
    //   })
    //   this.props.setAllSuratMasuk(response.data.length)
    //   // this.props.SuratMasuk(response.data.length)
    // })
  //   // .then(res=>{
  //   //   const surat = res.data;
  //   //   const long = res.data.length;
  //   //   this.setState({surat,long});
  //   // })
  // }
  componentDidMount() {
    this.getPenggunaInfo()
    // this.getDataSuratMasuk()
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
                count={this.state.long}
                // count={'12'}
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
export default connect(mapStateToProps, { setAllUser,setAllSuratMasuk })(Dashboard)
