import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
import PdfReader from '../PdfReader'
import ModalKonfirmDeleteSM from '../ModalKonfirmDeleteSM.js'
import EditFormSurat from '../EditFormSurat'
import ModalLoading from '../ModalLoading'
import UpdateReminder from '../FormUpdateReminder'

// import createuser from "./index";
class DetailSuratMasuk extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir: [],
      numPages: '',
      pageNumber: '',
      url: '',
      urlLampiran: '',
      showModal: false,
      showPengingatModal: false,
      pengguna: this.props.AllUser.allUserInfo,
      tglSurat: this.props.SuratDetail.TGL_SURAT,
      tglDiterima: this.props.SuratDetail.TGL_DITERIMA,
      modalLodaing: false,
    }

    this.onSubmit = this.onSubmit.bind(this)
    this.handleModal = this.handleModal.bind(this)
    this.handlePengingatModal = this.handlePengingatModal.bind(this)
    this.getFileSuratMasuk = this.getFileSuratMasuk.bind(this)
    this.reserveTgl = this.reserveTgl.bind(this)
  }
  //handle input changes and update item state

  async handleModal() {
    await this.setState({
      showModal: !this.state.showModal,
    })
    if (this.state.showModal == true) {
      this.getFileSuratMasuk()
      this.reserveTgl()
    }
  }
  async handlePengingatModal(){
    await this.setState({
      showPengingatModal: !this.state.showPengingatModal,
    })
  }
  reserveTgl() {
    let a = this.state.tglSurat.split('-')
    let b = this.state.tglDiterima.split('-')

    this.setState({
      tglSurat: a[2] + '-' + a[1] + '-' + a[0],
      tglDiterima: b[2] + '-' + b[1] + '-' + b[0],
    })
  }
  async onSubmit(e) {
    e.preventDefault()
  }
  async getFileSuratMasuk() {
    if (this.props.namaFile != null) {
      let formData = new FormData()
      formData.append('namafile', this.props.namaFile)

      await api()
        .post('/api/getSurat', formData)
        .then((response) =>
          this.setState({
            url: response.data.url,
          }),
        )
    }
    if (this.props.namaLampiran != null) {
      let formData = new FormData()
      formData.append('namafile', this.props.namaLampiran)

      await api()
        .post('/api/getSurat', formData)
        .then((response) =>
          this.setState({
            urlLampiran: response.data.url,
          }),
        )
    }
    // console.log('url file:' + this.state.url)
    // console.log('item:' + this.props.SuratDetail.NOMOR_SURAT)
    // console.log('item2:' + this.props.SuratDetail.PERIHAL)
    console.log('pengguna:' + this.state.pengguna)
    console.log('all user:' + this.props.AllUser.allUserInfo)
  }
  // handlePage(){
  //   if
  // }
  pencatat() {}

  render() {
    return (
      <>
        <button
          type="submit"
          className="bg-primary font-bold  self-center ml-2 mt-1  rounded p-1 shadow-sm w-75%"
          onClick={this.handleModal}
        >
          Lihat Detail
        </button>

        {this.state.showModal ? (
          <>
            <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
              <div className="relative w-auto h-90% mx-auto max-w-6xl">
                {/*content*/}
                <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-abu outline-none focus:outline-none">
                  {/* header*/}

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
                        {/* <button
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
                        </button> */}
                        <EditFormSurat SuratDetail={this.props.SuratDetail} />
                        <button
                          className="flex flex-row bg-primary font-bold items-center ml-2 mt-1  rounded p-2 shadow-sm w-75%"
                          type="button"
                        >
                          <div className="ml-1">
                            <img
                              className="h-4 align-middle"
                              src="assets/img/icon/Surat.png"
                            />
                          </div>
                          <div className="font-bold text-putih ml-1 mr-2">
                            Lihat Disposisi
                          </div>
                        </button>
                        <ModalLoading loading={this.state.modalLodaing} />
                        {/* <button
                          type="submit"
                          className="bg-primary font-bold 	self-center ml-2 mt-1  rounded p-1 shadow-sm w-full"
                        >
                          Ekspor ke PDF
                        </button> */}
                        <ModalKonfirmDeleteSM
                          NomorSurat={this.props.SuratDetail.NOMOR_SURAT}
                          IdSurat={this.props.SuratDetail.ID_PENCATATAN}
                        />
                      </div>
                      <div className="font-bold">Dicatat oleh </div>

                      <div className="col-span-2">
                        {this.state.pengguna.map((item, index) => {
                          const temp = item.ID_PENGGUNA
                          const temp2 = this.props.SuratDetail.ID_PENGGUNA
                          return (
                            <div key={index}>
                              {temp == temp2 ? <div>{item.NAMA}</div> : null}
                            </div>
                          )
                        })}
                      </div>
                      <div className="font-bold">No Agenda </div>
                      <div className=" col-span-2">
                        {this.props.SuratDetail.NOMOR_AGENDA}
                      </div>
                      <div className="font-bold">Dari </div>
                      <div className="font-bold">Nama</div>
                      <div className="">
                        : {this.props.SuratDetail.NAMA_PENGIRIM}{' '}
                      </div>
                      <div></div>
                      <div className="font-bold">Unit</div>
                      <div className="">
                        <ul>
                          {this.props.IdUnitKerja.map((item, index) => {
                            return (
                              <li key={index}>
                                {this.props.SuratDetail.ID_KODE_UNIT_KERJA ==
                                item.ID_KODE_UNIT_KERJA ? (
                                  <div className="">
                                    <p>
                                      : {item.KODE_UNIT_KERJA} -{' '}
                                      {item.NAMA_UNIT_KERJA}
                                    </p>
                                  </div>
                                ) : (
                                  <></>
                                )}
                              </li>
                            )
                          })}
                        </ul>
                      </div>
                      <div> </div>
                      <div className="font-bold">Penandatangan</div>
                      <div className="">
                        : {this.props.SuratDetail.PENANDATANGAN}
                      </div>
                      <div className="font-bold">Tujuan</div>
                      <div className=" col-span-2">
                        {this.props.SuratDetail.TUJUAN_SURAT}
                      </div>
                      <div className="font-bold">Nomor Surat</div>
                      <div className=" col-span-2">
                        {this.props.SuratDetail.NOMOR_SURAT}
                      </div>
                      <div className="font-bold">Tanggal Surat</div>
                      <div className=" col-span-2">
                        {/* {this.props.SuratDetail.TGL_SURAT} */}
                        {this.state.tglSurat}
                      </div>
                      <div className="font-bold">Tanggal Terima</div>
                      <div className=" col-span-2">
                        {/* {this.props.SuratDetail.TGL_DITERIMA} */}
                        {this.state.tglDiterima}
                      </div>
                      <div className="font-bold">Perihal / Ringkasa</div>
                      <div className=" col-span-2">
                        <p className="text-left overflow-ellipsis overflow-hidden">
                          {this.props.SuratDetail.PERIHAL}
                        </p>
                      </div>
                      <div className="font-bold">Jenis Surat</div>
                      <div className=" col-span-2">
                        {this.props.AllJenisSurat.allJenisSurat.map(
                          (item, index) => {
                            const temp = this.props.SuratDetail.ID_JENIS_SURAT
                            const temp2 = item.ID_JENIS_SURAT
                            return (
                              <div key={index}>
                                {temp == temp2 ? (
                                  <>
                                    {item.JENIS_SURAT}, {item.KETERANGAN}
                                  </>
                                ) : (
                                  <></>
                                )}
                              </div>
                            )
                          },
                        )}
                      </div>
                      <div className="font-bold">Sifat Surat</div>
                      <div className=" col-span-2">
                        {this.props.RSifatSurat.allSifatSuratInfo.map(
                          (item, index) => {
                            const temp = this.props.SuratDetail.ID_SIFAT_NASKAH
                            const temp2 = item.ID_SIFAT_NASKAH
                            return (
                              <div key={index}>
                                {temp == temp2 ? (
                                  <>{item.SIFAT_NASKAH}</>
                                ) : (
                                  <></>
                                )}
                              </div>
                            )
                          },
                        )}
                      </div>
                      <div className="font-bold">Derajat Surat</div>
                      <div className="col-span-2">
                        {this.props.RDerajatSurat.allDerajatSuratInfo.map(
                          (item, index) => {
                            const temp = this.props.SuratDetail.ID_DERAJAT_SURAT
                            const temp2 = item.ID_DERAJAT_SURAT
                            return (
                              <div key={index}>
                                {temp == temp2 ? (
                                  <>{item.DERAJAT_SURAT}</>
                                ) : (
                                  <></>
                                )}
                              </div>
                            )
                          },
                        )}{' '}
                      </div>
                      <div className="font-bold">Kode Arsip</div>
                      <div className="font-bold">Kom</div>
                      <div className="">
                        : {this.props.SuratDetail.KODE_ARSIP_KOM}
                      </div>
                      <div></div>
                      <div className="font-bold">Hlm</div>
                      <div className="">
                        : {this.props.SuratDetail.KODE_ARSIP_HLM}
                      </div>
                      <div></div>
                      <div className="font-bold">Manual</div>
                      <div className="">
                        : {this.props.SuratDetail.KODE_ARSIP_MANUAL}
                      </div>
                      <div className="font-bold">Keterangan</div>
                      <div className="col-span-2">-</div>

                      <div className="font-bold">Status Pengingat</div>
                      <div className=" col-span-2">
                        <div className=" flex flex-row">
                          {this.props.Pengingat.allPengingatInfo.map(
                            (item, index) => {
                              const temp = this.props.SuratDetail.ID_PENCATATAN
                              const temp2 = item.ID_PENCATATAN
                              return (
                                <div key={index}>
                                  {temp == temp2 ? (
                                    <>{item.STATUS == 1 ?(
                                      <>
                                      <button
                                        type="submit"
                                        className="bg-biru self-center ml-2 mt-1  rounded-md p-1 shadow-sm w-40% cursor-default"
                                      >
                                        Aktif
                                      </button>
                                      </>
                                    ) : (
                                      <>
                                      <button
                                        type="submit"
                                        className="bg-abu self-center ml-2 mt-1  rounded-md p-1 shadow-sm w-40% cursor-default"
                                      >
                                        Tidak Aktif
                                      </button></>
                                    )} 
                                    {/* <UpdateReminder
                                      idPengingat = {item.ID_PENGINGAT}
                                      waktuPengingat = {item.WAKTU_PENGINGAT}
                                      deskripsiPengingat = {item.DESKRIPSI}
                                    />                             */}
                                    </>                                    
                                  ) : (
                                    <></>
                                  )}
                                </div>
                              )
                            },
                          )}{' '}
                          
                          <button
                            type="submit"
                            className="bg-primary font-bold  self-center ml-2 mt-1  rounded p-1 shadow-sm w-auto"
                            onClick={this.handlePengingatModal}
                          >
                            <img
                              className="h-auto align-middle"
                              src="assets/img/icon/Pencil.png"
                            />
                          </button>
                        </div>
                        {/* <div className="text-sm">
                          Harus ditindaklanjuti dalam waktu 5 hari
                        </div> */}
                      </div>
                      <div className="font-bold">Status Tindak Lanjut</div>

                      <div className="font-bold rounded p-2 col-span-2 bg-danger w-75% text-putih">
                        Belum ditindak lanjuti
                      </div>
                    </div>
                    <div>
                      <div className=" flex justify-end   ">
                        <button onClick={this.handleModal}>
                          <img src="assets/img/icon/x.png" />
                        </button>
                      </div>
                      <div className="flex justify-center p-2 ">
                        <div className="w-auto">
                          {this.props.namaFile == null ? (
                            <> File kosong</>
                          ) : (
                            <>
                              <PdfReader
                                urlFile={this.state.url}
                                namaFile={
                                  this.props.SuratDetail.NAMA_FILE_SURAT
                                }
                                namaLampiran={
                                  this.props.SuratDetail.NAMA_FILE_LAMPIRAN
                                }
                                urlLampiran={this.state.urlLampiran}
                              />
                            </>
                          )}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </>
        ) : null}
        {this.state.showPengingatModal ? (
          <>
          {this.props.Pengingat.allPengingatInfo.map(
            (item,index) => {
              const temp = this.props.SuratDetail.ID_PENCATATAN
              const temp2 = item.ID_PENCATATAN
            return(
              <div key={index}>
                {temp == temp2 ? (
                  <>
                    <UpdateReminder
                    idPengingat = {item.ID_PENGINGAT}
                    idPengguna = {item.ID_PENGGUNA}
                    idPencatatan = {item.ID_PENCATATAN}
                    waktuPengingat = {item.WAKTU_PENGINGAT}
                    deskripsiPengingat = {item.DESKRIPSI}
                    status = {item.STATUS}
                    noAgenda = {this.props.SuratDetail.NOMOR_AGENDA}
                    idDerajatSurat = {this.props.SuratDetail.ID_DERAJAT_SURAT}
                  />
                  </>
                ) : (
                  <></>
                )}
              </div>
            )
          })}
          
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
