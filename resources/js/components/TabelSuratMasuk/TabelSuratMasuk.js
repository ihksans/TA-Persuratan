import React, { Component } from 'react'
//ini buat ngekoneksi redux
import { connect } from 'react-redux'
import {} from '../../actions'
import HeaderTabel from './HeaderTabel'
import BoxData from './BoxDataTabel'

// const TabelSuratMasuk = ({ SuratMasuk, IdJenisSurat, IdUnitKerja }) => {
class TabelSuratMasuk extends Component {
  constructor(props) {
    super(props)
    this.state = {
      SuratMasuk: this.props.SuratMasuk,
      search: '',
    }
    this.getSuratMasuk = this.getSuratMasuk.bind(this)
  }
  getSuratMasuk(e){
    this.setState({
      search: e.target.value.substr(0,20)
    })
  }
  render(){
    let filteredSM = this.state.SuratMasuk.filter(
      (surat) => {
        if (surat.TGL_DITERIMA.toLowerCase().includes(this.state.search.toLowerCase())){
          return surat.TGL_DITERIMA.toLowerCase().includes(this.state.search.toLowerCase())
        }
        if (surat.TGL_SURAT.toLowerCase().includes(this.state.search.toLowerCase())){
          return surat.TGL_SURAT.toLowerCase().includes(this.state.search.toLowerCase())
        }
        if (surat.NOMOR_SURAT.toLowerCase().includes(this.state.search.toLowerCase())){
          return surat.NOMOR_SURAT.toLowerCase().includes(this.state.search.toLowerCase())
        }
        if (surat.PERIHAL.toLowerCase().includes(this.state.search.toLowerCase())){
          return surat.PERIHAL.toLowerCase().includes(this.state.search.toLowerCase())
        }
        if (surat.TUJUAN_SURAT.toLowerCase().includes(this.state.search.toLowerCase())){
          return surat.TUJUAN_SURAT.toLowerCase().includes(this.state.search.toLowerCase())
        }
        if (surat.NAMA_PENGIRIM.toLowerCase().includes(this.state.search.toLowerCase())){
          return surat.NAMA_PENGIRIM.toLowerCase().includes(this.state.search.toLowerCase())
        }        
        // return surat.PERIHAL.toLowerCase().includes(
        //   this.state.search.toLowerCase() 
        // )
      }
    )
    return (
      <>
      <div className="flex flex-row">
          <input
          className="shadow rounded p-2"
          type="text"
          placeholder="Search..."
          onChange={this.getSuratMasuk}/>
      </div>
        <ul>
          <HeaderTabel />
          {filteredSM.map((item, index) => {
            return (
              <li key={index}>
                <BoxData
                  IdSuratMasuk={item.ID_PENCATATAN}
                  No={index + 1}
                  TglSurat={item.TGL_SURAT}
                  TglDiterima={item.TGL_DITERIMA}
                  NoSurat={item.NOMOR_SURAT}
                  Perihal={item.PERIHAL}
                  JenisSurat={item.ID_JENIS_SURAT}
                  TujuanSurat={item.TUJUAN_SURAT}
                  NamaPengirim={item.NAMA_PENGIRIM}
                  UnitPengirim={item.UNIT_PENGIRIM}
                  IdJenisSurat={this.props.IdJenisSurat}
                  NamaFileSurat={item.NAMA_FILE_SURAT}
                  NamaFileLampiran={item.NAMA_FILE_LAMPIRAN}
                  Surat={item}
                  IdUnitKerja={this.props.IdUnitKerja}
                  UnitKerja={item.ID_KODE_UNIT_KERJA}
                />
              </li>
            )
          })}
        </ul>
      </>
    )
  }
}
export default TabelSuratMasuk
