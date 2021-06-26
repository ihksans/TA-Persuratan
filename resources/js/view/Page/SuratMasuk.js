import React, { Component } from 'react'
import AddFormSurat from '../../components/AddFormSurat'
import PdfReader from '../../components/PdfReader'
import { connect } from 'react-redux'
import {
  setAllSuratMasuk,
  setJenisSurat,
  setUnitKerja,
  setDerajatSurat,
  setSifatSurat,
} from '../../actions'

//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import api from '../../service/api'
import TabelSuratMasuk from '../../components/TabelSuratMasuk/TabelSuratMasuk'

class SuratMasuk extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      suratMasuk: [],
      jenisSurat: [],
      unitKerja: [],
    }
    this.getSuratMasuk = this.getSuratMasuk.bind(this)
  }
  async getSuratMasuk() {
    await api()
      .get('api/getAllSuratMasuk')
      .then((response) => {
        this.setState({
          suratMasuk: response.data.content,
        })
        this.props.setAllSuratMasuk(response.data.content)
      })
    await api()
      .get('api/getAllJenisSurat')
      .then((response) => {
        this.setState({
          jenisSurat: response.data,
        })
        this.props.setJenisSurat(response.data)
      })
    await api()
      .get('api/getAllKodeUnit')
      .then((response) => {
        this.setState({
          unitKerja: response.data,
        })
        this.props.setUnitKerja(response.data)
      })
    await api()
      .get('api/getAllDerajatSurat')
      .then((response) => {
        this.props.setDerajatSurat(response.data)
      })
    await api()
      .get('api/getAllSifatNaskah')
      .then((response) => {
        this.props.setSifatSurat(response.data)
      })
  }
  componentDidMount() {
    this.getSuratMasuk()
  }
  render() {
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200 bg-gray-200 p-4	">
          <div className="bg-white shadow-md rounded p-6">
            <div className="flex flex-row">
              <div>
                <img className="w-8" src="assets/img/icon/Surat.png" />
              </div>
              <div className="font-bold ml-2 text-2xl	">Agenda Surat Masuk</div>
            </div>
            <AddFormSurat />

            <div>
              {this.props.SuratMasuk.allSuratMasukInfo == null ? (
                <TabelSuratMasuk
<<<<<<< HEAD
=======
                  Disposisi={this.state.Disposisi}
>>>>>>> dev-satria2
                  SuratMasuk={this.state.suratMasuk}
                  IdJenisSurat={this.state.jenisSurat}
                  IdUnitKerja={this.state.unitKerja}
                />
              ) : (
                <TabelSuratMasuk
                  SuratMasuk={this.props.SuratMasuk.allSuratMasukInfo}
<<<<<<< HEAD
=======
                  Disposisi={this.props.AllDisposisi.allDisposisiInfo}
>>>>>>> dev-satria2
                  IdJenisSurat={this.state.jenisSurat}
                  IdUnitKerja={this.state.unitKerja}
                />
              )}
              {/* <TabelSuratMasuk
                SuratMasuk={this.props.SuratMasuk.allSuratMasukInfo}
                IdJenisSurat={this.state.jenisSurat}
              /> */}
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
export default connect(mapStateToProps, {
  setAllSuratMasuk,
  setJenisSurat,
  setUnitKerja,
  setDerajatSurat,
  setSifatSurat,
})(SuratMasuk)
