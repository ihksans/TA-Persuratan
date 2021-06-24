import React, { Component } from 'react'
import AddFormSurat from '../../components/AddFormSurat'
import PdfReader from '../../components/PdfReader'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

class SuratMasuk extends Component {
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
          <p>Ini Class Komponen SuratMasuk</p>
          <AddFormSurat />
          <PdfReader />
        </div>
      </>
    )
  }
}
export default SuratMasuk
