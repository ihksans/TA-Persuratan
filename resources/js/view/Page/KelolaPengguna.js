import React, { Component } from 'react'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import FormUser from '../../components/FormUser'
import Pengguna from '../../components/Pengguna'

class KelolaPengguna extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {}
  }
  render() {
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200	">
          <p>Ini Class Komponen Kelola Pengguna</p>
          <Pengguna />
          <FormUser />
        </div>
      </>
    )
  }
}
export default KelolaPengguna
