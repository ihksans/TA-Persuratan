import React, { Component } from 'react'
import TabelPengguna from '../../components/TabelPengguna/TabelPengguna'
import { PenggunaData } from './PenggunaData'
import FormUser from '../../components/FormUser'

import api from '../../service/api'

class KelolaPengguna extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      Pengguna: [],
    }
    this.getPengguna = this.getPengguna.bind(this)
  }
  getPengguna() {
    api()
      .get('api/allPenggunaInfo')
      .then((response) => {
        this.setState({
          pengguna: response.data,
        })
        console.log('pengguna:' + response.data)
      })
  }
  componentDidMount() {
    this.getPengguna()
  }
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
            <button className="flex flex-row bg-primary p-2 mt-4">
              <div>
                <img
                  className="justify-center items-center"
                  src="assets/img/icon/Tambah.png"
                />
              </div>
              <div className="font-bold ml-1">Buat / Tambah</div>
            </button>
            <div>
              <TabelPengguna Pengguna={PenggunaData} />
            </div>
            <div>
              <FormUser />
            </div>
          </div>
        </div>
      </>
    )
  }
}
export default KelolaPengguna
