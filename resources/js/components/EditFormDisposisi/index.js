import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
// import Kalender from './Kalender'
import ModalLoading from '../ModalLoading'
import { divIcon } from 'leaflet'
// import DetailDisposisi from '../DetailDisposisi'

class EditFormDisposisi extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir:[],
      showModal: this.props.showModal,
      // nomorAgenda: this.props.SuratDetail.NOMOR_AGENDA,
      nomorAgenda: this.props.DisposisiDetail.NOMOR_AGENDA,
    }
    this.handleModal = this.handleModal.bind(this)
  }
  async handleModal(){
    this.setState({
      showModal: !this.state.showModal
    })
  }
  render(){
    return(
      <>
        <button
          className="flex flex-row bg-primary font-bold items-center ml-2 mt-1  rounded p-1 h-auto shadow-sm w-auto "
          type="button"
          onClick={this.handleModal}
        >
          <div className="ml-1">
            <img
              className="h-auto align-middle"
              src="assets/img/icon/Pencil.png"
            />
          </div>
          <div className="font-bold text-putih ml-1 mr-2">
            Edit Data Disposisi{' '}
          </div>
        </button>
        {this.state.showModal?(
          <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
            <div className="relative w-auto h-auto my-6 mx-auto max-w-6xl">
              {/* content */}
              <div className="border-2 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                {/* header */}
                {/* <div className="flex flex-row grid grid-cols-2 mr-8">
                  <div className="flex flex-row grid grid-cols-3 bg-white pb-10 pt-4 pl-4 pr-4">
                    <div className="flex flex-row items-start p-2  border-b ml-6 border-solid border-blueGray-200 rounded-t col-span-3">
                      <div>
                        <img
                          className="w-8"
                          src="assets/img/icon/Surat.png"
                        />
                      </div>
                      <div className="flex">
                        <h3 className="text-xl font-semibold">
                          Edit Disposisi
                        </h3>
                      </div>
                      <div className="font-bold col-span-3">
                        Detail Surat
                      </div>
                      <div className="font-bold">No Agenda </div>
                    </div>
                    <div>

                    </div>
                  </div>
                </div> */}
                <div className="flex flex-row items-start p-2 border-b ml-6 border-solid border-blueGray-200 rounded-t col-span-3">
                  <div>
                    <img
                      className="w-8"
                      src="assets/img/icon/Surat.png"
                    />
                  </div>
                  <div className="flex">
                    <h3 className="text-xl font-semibold">
                      Edit Disposisi
                    </h3>
                  </div>
                </div>
                <div className="flex flex-row grid grid-cols-2 mr-8">
                  <div className="flex flex-row grid grid-cols-3 bg-white p-4">
                    <div className="font-bold col-span-3">
                      Detail Surat
                    </div>
                    <div className="font-bold">No Agenda </div>
                    <div className=" col-span-2">
                      {this.state.nomorAgenda}
                    </div>
                    <div className="font-bold">Dari</div>
                    <div className="font-bold">Nama</div>
                    <div className="">: 
                      {/* {this.props.SuratDetail.NAMA_PENGIRIM}{''} */}
                    </div>
                    <div></div>
                    <div className="font-bold">Unit</div>
                    <div className="">: 
                      {/* {} */}
                    </div>
                    <div></div>
                    <div className="font-bold">Penandatangan</div>
                    <div className="">: 
                      {/* {} */}
                    </div>
                    <div className="font-bold">Tujuan</div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Nomor Surat </div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Tanggal Surat </div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Tanggal Terima </div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Perihal / Ringkasan Surat </div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Kode Hal </div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Jenis Surat </div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Sifat Surat </div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Derajat Surat</div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
                    <div className="font-bold">Kode Arsip</div>
                    <div className="font-bold">Kom</div>
                    <div className="">: 
                      {/* {this.props.SuratDetail.NAMA_PENGIRIM}{''} */}
                    </div>
                    <div></div>
                    <div className="font-bold">Hlm</div>
                    <div className="">: 
                      {/* {} */}
                    </div>
                    <div></div>
                    <div className="font-bold">Manual</div>
                    <div className="">: 
                      {/* {} */}
                    </div>
                    <div className="font-bold">Keterangan</div>
                    <div className=" col-span-2">
                      {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                    </div>
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
                    <div className="font-bold">
                      Status Tindak Lanjut
                      </div>
                    <div className="font-bold rounded p-2 col-span-2 bg-danger w-75% text-putih">
                      Belum ditindak lanjuti
                    </div>
                  </div>
                  <div>
                    <div className="flex justify-end">
                      <button onClick={this.handleModal}>
                        <img src="assets/img/icon/x.png" />
                      </button>
                    </div>
                    <div className="flex flex-row items-start p-2 ml-6 border-solid border-blueGray-200 rounded-t col-span-3">
                      <div>
                        <img className="w-8"></img>
                      </div>
                      <div className="flex">
                        <h3 className="text-xl font-semibold"></h3>
                      </div>
                    </div>
                    <div className="flex flex-row grid grid-cols-2 bg-white p-4">
                      <div className="font-bold col-span-2">
                        Data Disposisi
                      </div>
                      <form
                      className="mt-8"
                      action="#"
                      method="post"
                      // onSubmit{this.onSubmit}
                      >
                        <div className="flex flex-row grid grid-cols-2">
                          <div
                            htmlFor="nama"
                            className="text-sm mb-2 font-bold flex flex-row "
                          >
                            <div>Nomor Disposisi </div>
                            <div className="text-danger ml-2"> </div>
                          </div>
                          <div className="justify-end ">
                            <div className="">
                              {/* {this.props.SuratDetail.NOMOR_AGENDA} */}
                            </div>
                          </div>
                        </div>
                        <div className="flex flex-row grid grid-cols-2">
                          <div
                            htmlFor="nama"
                            className="text-sm mb-2 font-bold flex flex-row "
                          >
                            <div>Tanggal Disposisi </div>
                            <div className="text-danger ml-2"> </div>
                          </div>
                          <div className="justify-end ">
                            <div
                              type="text"
                              name="tanggalDisposisi"
                              required
                              id="tanggalDisposisi"
                              className={
                                'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	mr-4  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                              }
                            >
                              {/* <Kalender
                                onChange={(exDate, value) =>
                                this.handleTglDisposisi(
                                  value,
                                  exDate,
                                  )
                                }
                                data={null}
                              /> */}
                            </div>
                            {/* {this.state.errTglDisposisi ? (
                              <div className="text-danger text-xs mb-3">
                                Tanggal diterima harus diisi
                              </div>
                            ) : (
                              <></>
                            )} */}
                          </div>
                        </div>
                        <div className="flex flex-row grid grid-cols-2">
                          <div
                            htmlFor="nama"
                            className="text-sm mb-2 font-bold flex flex-row "
                          >
                            <div className="font-bold">Tujuan </div>
                          </div>
                          <div className="justify-end ">
                            <div className="">
                              {/* {this.props.SuratDetail.TUJUAN_SURAT} */}
                            </div>
                          </div>
                        </div>

                        <div className="flex flex-row grid grid-cols-2">
                          <div
                            htmlFor="nama"
                            className="text-sm mb-2 font-bold flex flex-row "
                          >
                            <div>Informasi / Isi Disposisi </div>
                            <div className="text-danger ml-2"> </div>
                          </div>
                          <div className="justify-end ">
                            <textarea
                              type="text"
                              name="informasiDisposisi"
                              required
                              id="informasiDisposisi"
                              className={
                                'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none  w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                              }
                              // onChange={this.handleInformasiDisposisi}
                            />
                            {/* {this.state.errInformasiDisposisi ? (
                              <div className="text-danger text-xs mb-3">
                                Informasi terkait disposisi harus
                                diisi
                              </div>
                            ) : (
                              <></>
                            )} */}
                          </div>
                        </div>
                        <div className="flex flex-row grid grid-cols-2">
                          <div
                            htmlFor="nama"
                            className="text-sm mb-2 font-bold flex flex-row "
                          >
                            <div>
                              Keterangan / Proses Selanjutnya{' '}
                            </div>
                            <div className="text-danger ml-2"> </div>
                          </div>
                          <div className="justify-end ">
                            <textarea
                              type="text"
                              name="keteranganDisposisi"
                              required
                              id="keteranganDisposisi"
                              className={
                                'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                              }
                              // onChange={
                              //   this.handleKeteranganDisposisi
                              // }
                            />
                            {/* {this.state.errKeteranganDisposisi ? (
                              <div className="text-danger text-xs mb-3">
                                Keterangan terkait disposisi harus
                                diisi
                              </div>
                            ) : (
                              <></>
                            )} */}
                          </div>
                        </div>
                        <div className="flex flex-row grid grid-cols-2">
                          <div
                            htmlFor="nama"
                            className="text-sm mb-2 font-bold flex flex-row "
                          >
                            <div>File Disposisi </div>
                            <div className="text-danger ml-2"> </div>
                          </div>
                          <div className="justify-end ">
                            <input
                              type="file"
                              name="lampiranDisposisi"
                              required
                              id="lampiranDisposisi"
                              className={
                                'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                              }
                              onChange={this.onFileChange}
                            >
                              {/* {this.state.lastAgenda} */}
                            </input>
                          </div>
                        </div>
                        <div className="flex flex-row grid grid-cols-2 mb-4 mt-4  p-2">
                          <div></div>
                          <div className=" text-xs text-abu ">
                            Keterangan (*): data wajib diisi.
                          </div>
                        </div>
                        <div className="flex flex-row grid grid-cols-2 items-center">
                          <div></div>
                          <button
                            type="submit"
                            className="  p-1 border-2 rounded-md  bg-biru justify-center items-center"
                            onClick={this.onSubmit}
                            value="Add Disposisi"
                          >
                            Simpan
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ):(
          <></>
        )}
      </>
    )
  }
}

export default EditFormDisposisi
