import React, { Component } from 'react'
import TabelPengguna from '../../components/TabelPengguna/TabelPengguna'
import BoxDataTabel from '../../components/TabelPengguna/BoxDataTabel'
import { PenggunaData } from './PenggunaData'
import FormUser from '../../components/FormUser'
import { connect } from 'react-redux'
import { setAllUser } from '../../actions'
import api from '../../service/api'
import ModalAddPengguna from '../../components/ModalAddPengguna'
class KelolaPengguna extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      Pengguna: [],
    }
    this.getPengguna = this.getPengguna.bind(this)
    // this.deletePengguna = this.deletePengguna.bind(this);
  }
  async getPengguna() {
   await api()
      .get('api/allPenggunaInfo')
      .then((response) => {
        this.props.setAllUser(response.data)
        this.setState({
          pengguna: this.props.AllUser.allUserInfo,
        })
        console.log('pengguna:' + this.props.AllUser.allUserInfo)
      })
  }
  componentDidMount() {
    this.getPengguna()
  }
  // deletePengguna(id){
  //   let formData = new FormData()
  //   formData.append('id',id)
  //   api()
  //     // .delete('api/deleteUser,formData)
  //     .delete('api/deleteUser/${formData}')
  //     .then(response=>{
  //       console.log('pengguna tidak terhapus'+response.data)
  //     }).catch((error)=>{
  //       console.log(error)
  //     })
  //     console.log('id:' +id)
  // }
  render() {
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200 p-4	">
          <div className="bg-white shadow-md p-6">
            <div className="flex flex-row">
              <div>
                <img className="w-6" src="assets/img/icon/User.png" />
              </div>
              <div className="font-bold ml-4 text-2xl	">Kelola Pengguna</div>
            </div>

            <ModalAddPengguna />

            <div>
              <TabelPengguna Pengguna={this.props.AllUser.allUserInfo} />
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
export default connect(mapStateToProps, { setAllUser })(KelolaPengguna)
