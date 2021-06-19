import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
import PdfReader from '../PdfReader'
// import createuser from "./index";
class DetailSuratMasuk extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir: [],
      numPages: '',
      pageNumber: '',
      url: '',
      showModal: false,
    }

    this.onSubmit = this.onSubmit.bind(this)
    this.handleModal = this.handleModal.bind(this)
    this.getFileSuratMasuk = this.getFileSuratMasuk.bind(this)
  }
  //handle input changes and update item state

  async handleModal() {
    await this.setState({
      showModal: !this.state.showModal,
    })
    if (this.state.showModal == true) {
      this.getFileSuratMasuk()
    }
  }

  async onSubmit(e) {
    e.preventDefault()
  }
  async getFileSuratMasuk() {
    let formData = new FormData()
    formData.append('namafile', this.props.namaFile)

    await api()
      .post('/api/getSurat', formData)
      .then((response) =>
        this.setState({
          url: response.data.url,
        }),
      )
    console.log('url file:' + this.state.url)
    console.log('item:' + this.props.SuratDetail.NO_SURAT)
    console.log('item:' + this.props.SuratDetail)
  }

  render() {
    return (
      <>
        <button
          type="submit"
          className="bg-primary font-bold  self-center ml-2 mt-1  rounded p-1 shadow-sm w-75%"
          onClick={this.handleModal}
        >
          Detail
        </button>

        {this.state.showModal ? (
          <>
            <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
              <div className="relative w-auto h-90% mx-auto max-w-6xl">
                {/*content*/}
                <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-abu outline-none focus:outline-none">
                  {/* header*/}
                  <div className="flex items-start justify-center ">
                    <button
                      className="p-1 ml-auto leading-none  outline-none focus:outline-none"
                      onClick={this.handleModal}
                    >
                      <img
                        className="justify-center items-center"
                        src="assets/img/icon/x.png"
                      />
                    </button>
                  </div>

                  <div className="flex flex-row grid grid-cols-2 mr-8">
                    <div className="flex flex-row grid grid-cols-3 bg-white p-4">
                      <div className="flex flex-row items-start p-2 border-b ml-6 border-solid border-blueGray-200 rounded-t col-span-3">
                        <div>
                          <img
                            className="w-8"
                            src="assets/img/icon/Surat.png"
                          />
                        </div>
                        <div className="flex ">
                          <h3 className="text-xl font-semibold ">
                            Detail Surat Masuk
                          </h3>
                        </div>
                      </div>
                      <div className="flex flex-row  col-span-3 mb-4 border-b-2">
                        <button
                          type="submit"
                          className="flex flex-row bg-primary font-bold items-center ml-2 mt-1  rounded p-2 shadow-sm w-75%"
                        >
                          <div className="ml-1">
                            <img
                              className="h-auto align-middle"
                              src="assets/img/icon/Pencil.png"
                            />
                          </div>
                          <div className="font-bold ml-1 mr-2">Edit</div>
                        </button>

                        <button
                          type="submit"
                          className="bg-primary font-bold  self-center ml-2 mt-1  rounded p-1 shadow-sm w-full"
                        >
                          Lihat Disposisi
                        </button>

                        <button
                          type="submit"
                          className="bg-primary font-bold 	self-center ml-2 mt-1  rounded p-1 shadow-sm w-full"
                        >
                          Ekspor ke PDF
                        </button>
                        <button
                          type="submit"
                          className="bg-danger font-bold text-putih self-center ml-2 mt-1  rounded p-1 shadow-sm w-full"
                        >
                          Hapus Surat
                        </button>
                      </div>
                      <div className="font-bold">Dicatat oleh </div>
                      <div className="col-span-2">Satria</div>
                      <div className="font-bold">No Agenda </div>
                      <div className=" col-span-2">5</div>
                      <div className="font-bold">Dari </div>
                      <div className="font-bold">Nama</div>
                      <div className="">: KO </div>
                      <div></div>
                      <div className="font-bold">Unit</div>
                      <div className="">: KO - Jurusan Teknik Komputer</div>
                      <div> </div>
                      <div className="font-bold">Penandatangan</div>
                      <div className="">: KO</div>
                      <div className="font-bold">Tujuan</div>
                      <div className=" col-span-2">
                        R3-Pembantu Direktur Bidang Kemahasiswaan
                      </div>
                      <div className="font-bold">Nomor Surat</div>
                      <div className=" col-span-2">
                        B/16/PL1.KO/KM.01.00/2020
                      </div>
                      <div className="font-bold">Tanggal Surat</div>
                      <div className=" col-span-2">27 April 2021</div>
                      <div className="font-bold">Tanggal Terima</div>
                      <div className=" col-span-2">28 April 2021</div>
                      <div className="font-bold">Perihal / Ringkasa</div>
                      <div className=" col-span-2">
                        Laporan Pertanggungjawaban beasiswa kwartal 1 TA
                        2019/2020
                      </div>
                      <div className="font-bold">Kode Hal</div>
                      <div className=" col-span-2">KM.01.00</div>
                      <div className="font-bold">Jenis Surat</div>
                      <div className=" col-span-2">
                        Khusus, Surat Keterangan
                      </div>
                      <div className="font-bold">Sifat Surat</div>
                      <div className=" col-span-2">Biasa</div>
                      <div className="font-bold">Derajat Surat</div>
                      <div className="col-span-2">Segera</div>
                      <div className="font-bold">Kode Arsip</div>
                      <div className="font-bold">Kom</div>
                      <div className="">:TUKAKCIA</div>
                      <div></div>
                      <div className="font-bold">Hlm</div>
                      <div className="">: 3</div>
                      <div></div>
                      <div className="font-bold">Manual</div>
                      <div className="">: TUAK.00.00-0001</div>
                      <div className="font-bold">Keterangan</div>
                      <div className="col-span-2">-</div>

                      <div className="font-bold">Status Pengingat</div>
                      <div className=" col-span-2">
                        <div className=" flex flex-row">
                          <button
                            type="submit"
                            className="bg-biru   self-center ml-2 mt-1  rounded-full p-1 shadow-sm w-40%"
                          >
                            Aktif
                          </button>
                          <button
                            type="submit"
                            className="bg-primary font-bold  self-center ml-2 mt-1  rounded p-1 shadow-sm w-auto"
                          >
                            <img
                              className="h-auto align-middle"
                              src="assets/img/icon/Pencil.png"
                            />
                          </button>
                        </div>
                        <div className="text-sm">
                          Harus ditindaklanjuti dalam waktu 5 hari
                        </div>
                      </div>
                      <div className="font-bold">Status Tindak Lanjut</div>

                      <div className="font-bold rounded p-2 col-span-2 bg-danger w-75% text-putih">
                        Belum ditindak lanjuti
                      </div>
                    </div>
                    <div className="flex justify-center p-2 ">
                      <div className="w-auto">
                        <PdfReader urlFile={this.state.url} />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </>
        ) : null}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, {})(DetailSuratMasuk)
