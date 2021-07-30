import React, { Component } from 'react'
//ini buat ngekoneksi redux
import { connect } from 'react-redux'
import {} from '../../actions'
import HeaderTabel from './HeaderTabel'
import BoxData from './BoxDataTabel'
class TabelSuratKeluar extends Component {
  constructor(props) {
    super(props)
    this.state = {
      SuratKeluar: this.props.SuratKeluar,
      search: '',
    }
    this.getSuratKeluar = this.getSuratKeluar.bind(this)
  }
  getSuratKeluar(e) {
    this.setState({
      search: e.target.value.substr(0, 20),
    })
  }
  render() {
    // let filteredSM = this.state.SuratKeluar.filter((surat) => {
    // if (
    //   surat.TGL_KIRIM.toLowerCase().includes(this.state.search.toLowerCase())
    // ) {
    //   return surat.TGL_KIRIM.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // }
    // if (
    //   surat.TGL_SURAT.toLowerCase().includes(this.state.search.toLowerCase())
    // ) {
    //   return surat.TGL_SURAT.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // }
    // if (
    //   surat.NOMOR_SURAT.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // ) {
    //   return surat.NOMOR_SURAT.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // }
    // if (
    //   surat.PERIHAL.toLowerCase().includes(this.state.search.toLowerCase())
    // ) {
    //   return surat.PERIHAL.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // }
    // if (
    //   surat.TUJUAN_SURAT.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // ) {
    //   return surat.TUJUAN_SURAT.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // }
    // if (
    //   surat.NAMA_PENGIRIM.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // ) {
    //   return surat.NAMA_PENGIRIM.toLowerCase().includes(
    //     this.state.search.toLowerCase(),
    //   )
    // }
    // })
    return (
      <>
        <div className="flex absolute right-10 top-32 justify-end mt-5 w-1/2">
          <div className="flex w-1/2 border border-brokenblack shadow rounded-sm p-2 hover:shadow-md focus:outline-none">
            <input
              className="w-full focus:outline-none"
              type="text"
              placeholder="Cari Surat..."
              onChange={this.getSuratKeluar}
            />
            <svg
              className="justify-end h-7 w-7"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </div>
        </div>
        <ul>
          <HeaderTabel />
          {/* {filteredSM.map((item, index) => {
            return (
              <li key={index}>
                <BoxData
                  No={index + 1}
                  IdJenisSurat={this.props.IdJenisSurat}
                  Surat={item}
                  IdUnitKerja={this.props.IdUnitKerja}
                />
              </li>
            )
          })} */}
          {this.state.SuratKeluar == null
            ? null
            : this.state.SuratKeluar.map((item, index) => {
                return (
                  <li key={index}>
                    <BoxData
                      No={index + 1}
                      IdJenisSurat={this.props.IdJenisSurat}
                      Surat={item}
                      IdUnitKerja={this.props.IdUnitKerja}
                      Disposisi={this.props.Disposisi}
                    />
                  </li>
                )
              })}
        </ul>
      </>
    )
  }
}
export default TabelSuratKeluar
