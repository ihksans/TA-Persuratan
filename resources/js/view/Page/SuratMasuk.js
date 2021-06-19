import React, { Component } from 'react'
import AddFormSurat from '../../components/AddFormSurat'
import PdfReader from '../../components/PdfReader'
import { connect } from 'react-redux'
import { setAllSuratMasuk } from '../../actions'

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
        // this.props.setAllUser(response.data)
        this.props.setAllSuratMasuk(response.data.content)

        console.log('surat masuk:' + this.state.suratMasuk)
      })
    await api()
      .get('api/getAllJenisSurat')
      .then((response) => {
        this.setState({
          jenisSurat: response.data,
        })
      })
    console.log('jenis surat:' + this.state.jenisSurat)
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
              {/* {this.props.SuratMasuk.allSuratMasukInfo == null ? (
                <TabelSuratMasuk SuratMasuk={this.state.suratMasuk} />
              ) : (
                <TabelSuratMasuk
                  SuratMasuk={this.props.SuratMasuk.allSuratMasukInfo}
                />
              )} */}
              <TabelSuratMasuk
                SuratMasuk={this.props.SuratMasuk.allSuratMasukInfo}
                IdJenisSurat={this.state.jenisSurat}
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
export default connect(mapStateToProps, { setAllSuratMasuk })(SuratMasuk)
