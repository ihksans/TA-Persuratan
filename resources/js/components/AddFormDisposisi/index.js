import axios from 'axios'
import api from '../../service/api'
import React, { Component, component, useState } from 'react'
import { connect } from 'react-redux'
import Kalender from '../AddFormSurat/Kalender'
import ModalLoading from '../ModalLoading'
import EditFormDisposisi from '../EditFormDisposisi'
import ModalKonfirmDeleteDispo from '../ModalKonfirmDeleteDispo'
import PdfReader from '../PdfReader'
class AddFormDisposisi extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir: [],
      tglSurat: this.props.SuratDetail.TGL_SURAT,
      tglDiterima: this.props.SuratDetail.TGL_DITERIMA,
      fileDisposisi: null,
      nomorDisposisi: '',
      tglDisposisi: null,
      tujuanDisposisi: '',
      informasiDisposisi: null,
      keteranganDisposisi: null,
      namaFileDisposisi: null,
      firstDate: new Date(),
      showForm: false,
      showModal: this.props.showModal,
      errNomorDisposisi: false,
      errTglDisposisi: false,
      errTujuanDisposisi: false,
      errInformasiDisposisi: false,
      errKeteranganDisposisi: false,
      errNamaFileDisposisi: false,
      loading: false,
      jenisDisposisi:"1",
    }
    this.handleLoading = this.handleLoading.bind(this)

    this.handleModal = this.handleModal.bind(this)
    this.handleTglDisposisi = this.handleTglDisposisi.bind(this)
    this.handleInformasiDisposisi = this.handleInformasiDisposisi.bind(this)
    this.handleKeteranganDisposisi = this.handleKeteranganDisposisi.bind(this)

    this.onSubmit = this.onSubmit.bind(this)

    this.handleErrTglDisposisi = this.handleErrTglDisposisi.bind(this)
    this.handleErrInformasiDisposisi = this.handleErrInformasiDisposisi.bind(
      this,
    )
    this.handleErrKeteranganDisposisi = this.handleErrKeteranganDisposisi.bind(
      this,
    )

    this.ValidateInformasiDisposisi = this.ValidateInformasiDisposisi.bind(this)
    this.ValidateKeteranganDisposisi = this.ValidateKeteranganDisposisi.bind(
      this,
    )
    this.validateSurat = this.validateSurat.bind(this)

    this.ValidateTglDisposisi = this.ValidateTglDisposisi.bind(this)
    this.handleShowForm = this.handleShowForm.bind(this)
    this.onFileChange = this.onFileChange.bind(this)
  }
  validateSurat(input) {
    const extension = '.pdf'
    let result2 = this.state.fileDisposisi.name.match(extension)
    if (result2) {
      if (this.state.fileDisposisi.size > '10485760') {
        //this.handleErrSurat('Ukuran file surat melebihi 10 Mb')
      } else {
        // this.handleErrSurat('')
        let namasurat = this.props.SuratDetail.NOMOR_SURAT.split('/').join('_')
        console.log('nama surat:' + namasurat)
        this.setState({
          namaFileDisposisi: namasurat,
        })
      }
    } else {
      this.handleErrSurat('Surat file harus pdf')
    }
  }
  handleLoading() {
    this.setState({
      loading: !this.state.loading,
    })
  }
  onFileChange(event) {
    // Update the state
    this.setState({ fileDisposisi: event.target.files[0] })
  }
  ValidateTglDisposisi(input) {
    if (input == null || input == '') {
      this.handleErrTglDisposisi(true)
    } else {
      this.handleErrTglDisposisi(false)
    }
  }
  ValidateInformasiDisposisi(input) {
    if (input == null || input == '') {
      this.handleErrInformasiDisposisi(true)
    } else {
      this.handleErrInformasiDisposisi(false)
    }
  }
  ValidateKeteranganDisposisi(input) {
    if (input == null || input == '') {
      this.handleErrKeteranganDisposisi(true)
    } else {
      this.handleErrKeteranganDisposisi(false)
    }
  }

  handleErrTglDisposisi(props) {
    this.setState({
      errTglDisposisi: props,
    })
  }
  handleErrInformasiDisposisi(e) {
    this.setState({
      errInformasiDisposisi: props,
    })
  }
  handleErrKeteranganDisposisi(e) {
    this.setState({
      errKeteranganDisposisi: props,
    })
  }

  handleInformasiDisposisi(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      informasiDisposisi: str,
    })
  }
  handleKeteranganDisposisi(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      keteranganDisposisi: str,
    })
  }

  handleTglDisposisi(exDate, value) {
    this.setState({
      tglDisposisi: exDate,
    })
    this.setState({
      firstDate: value,
    })
  }
  handleShowForm() {
    this.setState({
      showForm: !this.state.showForm,
    })
  }
  handleModal() {
    this.setState({
      showModal: !this.state.showModal,
      nomorDisposisi: '',
      tglDisposisi: null,
      tujuanDisposisi: '',
      informasiDisposisi: null,
      keteranganDisposisi: null,
      namaFileDisposisi: null,
      jenisDisposisi:"1",

      errNomorDisposisi: false,
      errTglDisposisi: false,
      errTujuanDisposisi: false,
      errInformasiDisposisi: false,
      errKeteranganDisposisi: false,
      errNamaFileDisposisi: false,
    })
  }

  async onSubmit(e) {
    e.preventDefault()
    this.handleLoading()
    await this.validateSurat()
    let formData = new FormData()

    formData.append('id_pengguna', this.props.User.currentUser.ID_PENGGUNA)
    formData.append('id_pencatatan', this.props.SuratDetail.ID_PENCATATAN)
    formData.append('nomor_agenda', this.props.SuratDetail.NOMOR_AGENDA)
    formData.append('tanggal_disposisi', this.state.tglDisposisi)
    formData.append('tujuan_surat', this.props.SuratDetail.TUJUAN_SURAT)
    formData.append('informasi', this.state.informasiDisposisi)
    formData.append('proses_selanjutnya', this.state.keteranganDisposisi)
    formData.append('jenis_disposisi', this.state.jenisDisposisi)
    //formData.append('nomor_disposisi', this.props.SuratDetail.NOMOR_SURAT)
    await api()
      .post('api/createDisposisi', formData)
      .then((response) => {
        console.log('create dispo:' + response)
        if (this.state.fileDisposisi == null) {
          this.handleLoading()
          this.handleModal()
          console.log('nomorsurat tanpa file:' + this.state.namaFileDisposisi)

          window.location.reload('/#/SuratMasuk')
        }
      })
      .catch((err) => console.log(err))
    if (this.state.fileDisposisi != null) {
      let fd2 = new FormData()
      console.log('nomorsurat dengan file:' + this.state.namaFileDisposisi)
      fd2.append('myFile', this.state.fileDisposisi)
      fd2.append('namefile', this.state.namaFileDisposisi + '_disposisi')
      await api()
        .post('api/addSurat', fd2)
        .then((response) => {
          this.handleLoading()
          this.handleModal()
          window.location.reload('/#/SuratMasuk')
        })
    }
  }

  render() {
    return (
      <>
        {this.state.showModal ? (
          <>
            <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
              <div className="relative w-auto h-auto my-6 mx-auto max-w-6xl">
                {/* content */}
                <div className="border-2 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                  {/* Header */}

                  {this.props.disposisi == null ? (
                    <>
                      {this.state.showForm == false ? (
                        <div className="grid justify-items-stretch justify-center m-4">
                          <div className=" flex justify-end   ">
                            <button onClick={this.handleModal}>
                              <img src="assets/img/icon/x.png" />
                            </button>
                          </div>
                          <div className=" flex justify-center mb-4">
                            <img
                              className="justify-self-center w-20 mt-6"
                              src="assets/img/icon/Warning.png"
                            />
                          </div>
                          <div>Belum ada data disposisi</div>
                          <button
                            className="justify-self-center flex flex-row bg-primary p-2 mt-4 hover:bg-orenHover focus:outline-none"
                            type="button"
                            onClick={this.handleShowForm}
                          >
                            <div className="ml-1">
                              <img
                                className="h-6 align-middle"
                                src="assets/img/icon/Tambah.png"
                              />
                            </div>
                            <div className="font-bold ml-1 mr-2">
                              Tambah Disposisi
                            </div>
                          </button>
                        </div>
                      ) : (
                        <>
                          <div className="flex flex-row items-start p-2 ml-6 rounded-t col-span-3">
                            <div>
                              <img
                                className="w-8"
                                src="assets/img/icon/Surat.png"
                              />
                            </div>
                            <div className="flex">
                              <h3 className="text-xl font-semibold">
                                Detail Disposisi
                              </h3>
                            </div>
                          </div>
                          <div className="flex flex-row grid grid-cols-2 mr-8">
                            <div className="flex flex-row grid grid-cols-3 bg-white p-4">
                              <div className="font-bold col-span-3">
                                Detail Surat
                              </div>
                              <div className="font-bold">Dicatat oleh </div>

                              <div className="col-span-2">
                                {this.props.SuratDetail.NAMA}
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
                                <div className="">
                                  <p>
                                    : {this.props.SuratDetail.KODE_UNIT_KERJA} -{' '}
                                    {this.props.SuratDetail.NAMA_UNIT_KERJA}
                                  </p>
                                </div>
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
                              <div className="font-bold">
                                Perihal / Ringkasan Surat
                              </div>
                              <div className=" col-span-2">
                                <p className="text-left overflow-ellipsis overflow-hidden">
                                  {this.props.SuratDetail.PERIHAL}
                                </p>
                              </div>
                              <div className="font-bold">Jenis Surat</div>
                              <div className=" col-span-2">
                                {this.props.SuratDetail.JENIS_SURAT}
                              </div>
                              <div className="font-bold">Sifat Surat</div>
                              <div className=" col-span-2">
                                <>{this.props.SuratDetail.SIFAT_NASKAH}</>
                              </div>
                              <div className="font-bold">Derajat Surat</div>
                              <div className="col-span-2">
                                <>{this.props.SuratDetail.DERAJAT_SURAT}</>
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

                              <div className="font-bold">Status Pengingat</div>
                              <div className=" col-span-2">
                                <div className=" flex flex-row">
                                  {this.props.pengingatS == null ? (
                                    <>
                                      <button
                                        type="submit"
                                        className="bg-abu self-center mt-1 rounded-full p-1 shadow-sm w-40% cursor-default focus:outline-none"
                                      >
                                        Tidak Aktif
                                      </button>
                                    </>
                                  ) : (
                                    <>
                                      {this.props.pengingatS.STATUS == 1 ? (
                                        <>
                                          <button
                                            type="submit"
                                            className="bg-biru self-center mt-1 rounded-full p-1 shadow-sm w-40% cursor-default focus:outline-none"
                                          >
                                            Aktif
                                          </button>
                                        </>
                                      ) : (
                                        <>
                                          <button
                                            type="submit"
                                            className="bg-abu self-center mt-1 rounded-full p-1 shadow-sm w-40% cursor-default focus:outline-none"
                                          >
                                            Tidak Aktif
                                          </button>
                                        </>
                                      )}
                                    </>
                                  )}
                                </div>
                                {this.props.pengingatS != null ? (
                                  <>
                                {this.props.pengingatS.STATUS == 1 ? (
                                  <>
                                  <div className="text-sm">
                                    Harus ditindaklanjuti dalam waktu {this.props.countDays} hari
                                  </div>
                                  </>
                                ):(<><div className="text-sm">
                              </div></>)}
                                </>
                                ):(<><div className="text-sm">
                                </div></>)}
                              </div>
                              <div className="font-bold">Status Tindak Lanjut</div>

                              {this.props.pengingatS == null ? (
                                <>
                                  <p className="font-semibold self-center rounded-md p-1 col-span-2 text-danger w-75%">
                                    Belum ditindaklanjuti
                                  </p>
                                </>
                              ) : (
                                <>
                                  {this.props.pengingatS.STATUS == 0 ? (
                                    <>
                                      <p className="font-semibold self-center rounded-md p-1 col-span-2 w-75% text-green pointer-events-none">
                                        Sudah ditindaklanjuti
                                      </p>
                                    </>
                                  ) : (
                                    <>
                                      <p
                                        className="font-semibold self-center rounded-md p-1 col-span-2 text-danger w-75%"
                                      >
                                        Belum ditindaklanjuti
                                      </p>
                                    </>
                                  )}
                                </>
                              )}
                            </div>
                            <div>
                              <div className=" flex justify-end   ">
                                <button onClick={this.handleModal}>
                                  <img src="assets/img/icon/x.png" />
                                </button>
                              </div>
                              <div className="flex flex-row items-start p-2 ml-6 border-solid border-blueGray-200 rounded-t col-span-3">
                                <div>
                                  <img
                                    className="w-8"
                                    // src="assets/img/icon/Surat.png"
                                  />
                                </div>
                                <div className="flex">
                                  <h3 className="text-xl font-semibold"></h3>
                                </div>
                              </div>
                              {/* <div className="font-bold col-span-3">Detail Surat</div> */}
                              <div className="flex flex-row grid grid-cols-2 bg-white p-4">
                                <div className="font-bold col-span-2">
                                  Data Disposisi
                                </div>

                                <form
                                  className="mt-8"
                                  action="#"
                                  method="POST"
                                  onSubmit={this.onSubmit}
                                >
                                  {/* <div className="flex flex-row grid grid-cols-2"> */}
                                  <div className="flex flex-row grid grid-cols-2">
                                    <div
                                      htmlFor="nama"
                                      className="text-sm mb-2 font-bold flex flex-row "
                                    >
                                      <div className="mt-2">Nomor Disposisi </div>
                                      <div className="text-danger ml-2 mt-2">
                                        {/* {' '}
                                        *  */}
                                        </div>
                                    </div>
                                    <div className="justify-end ">
                                      <div className="">
                                        {this.props.SuratDetail.NOMOR_AGENDA}
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
                                        <Kalender
                                          onChange={(exDate, value) =>
                                            this.handleTglDisposisi(
                                              exDate,
                                              value,
                                            )
                                          }
                                          data={null}
                                        />
                                      </div>
                                      {this.state.errTglDisposisi ? (
                                        <div className="text-danger text-xs mb-3">
                                          Tanggal diterima harus diisi
                                        </div>
                                      ) : (
                                        <></>
                                      )}
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
                                        {this.props.SuratDetail.TUJUAN_SURAT}
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
                                        onChange={this.handleInformasiDisposisi}
                                      />
                                      {this.state.errInformasiDisposisi ? (
                                        <div className="text-danger text-xs mb-3">
                                          Informasi terkait disposisi harus
                                          diisi
                                        </div>
                                      ) : (
                                        <></>
                                      )}
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
                                        onChange={
                                          this.handleKeteranganDisposisi
                                        }
                                      />
                                      {this.state.errKeteranganDisposisi ? (
                                        <div className="text-danger text-xs mb-3">
                                          Keterangan terkait disposisi harus
                                          diisi
                                        </div>
                                      ) : (
                                        <></>
                                      )}
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
                                      className="  p-1 border-2 rounded-md  bg-biru justify-center items-center hover:bg-biruduaHover focus:outline-none"
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
                        </>
                      )}
                    </>
                  ) : (
                    <>
                      <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
                        <div className="relative w-auto h-90% my-6 mx-auto max-w-6xl">
                          {/* content */}
                          <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-abu outline-none focus:outline-none">
                            {/* Header */}
                            <div className="flex flex-row grid grid-cols-2 mr-8">
                              <div className="flex flex-row grid grid-cols-3 bg-white pb-10 pt-4 pl-4 pr-4">
                                <div className="flex flex-row items-start p-2  rounded-t col-span-3">
                                  <div>
                                    <img
                                      className="w-8"
                                      src="assets/img/icon/Surat.png"
                                    />
                                  </div>
                                  <div className="flex">
                                    <h3 className="text-xl font-semibold">
                                      Detail Disposisi
                                    </h3>
                                  </div>
                                </div>
                                <div className="flex flex-row  col-span-3 mb-4 mb-10">
                                  <EditFormDisposisi
                                  namaFile={this.props.NamaFileSurat}
                                  SuratDetail={this.props.SuratDetail}
                                  namaLampiran={this.props.NamaFileLampiran}
                                  jenisSurat={this.props.jenisSurat}
                                  IdUnitKerja={this.props.IdUnitKerja}
                                  disposisi={this.state.disposisi}
                                  url={this.state.url}
                                  pengingatS={this.props.pengingatS}
                                  countDays={this.props.countDays}
                                  DisposisiDetail={this.props.DisposisiDetail}
                                  />

                                  <ModalKonfirmDeleteDispo
                                    IdDispo={this.props.disposisi.ID_DISPOSISI}
                                    handleDisposisi={() => this.handleModal()}
                                  />
                                </div>

                                <div className="font-bold">
                                  No. Agenda Disposisi
                                </div>
                                <div className="col-span-2 ml-4">
                                  {this.props.SuratDetail.NOMOR_AGENDA}
                                </div>

                                <div className="font-bold ">
                                  Tanggal Disposisi
                                </div>
                                <div className="col-span-2 ml-4">
                                  {this.props.disposisi.TANGGAL_DISPOSISI}
                                </div>
                                <div className="font-bold">Tujuan </div>
                                <div className="col-span-2 ml-4">
                                  {this.props.SuratDetail.TUJUAN_SURAT}
                                </div>

                                <div className="font-bold">
                                  Informasi / Isi Disposisi
                                </div>
                                <div className="col-span-2 ml-4 mb-2">
                                  {this.props.disposisi.INFORMASI}
                                </div>
                                <div className="font-bold ">Keterangan</div>
                                <div className="col-span-2 ml-4">
                                  {this.props.disposisi.PROsSES_SELANJUTNYA}
                                </div>
                                <div></div>

                                <div className="font-bold col-span-3 mb-2 mt-4">
                                  Informasi Surat yang Didisposisikan
                                </div>

                                <div className="font-bold">
                                  Nomor Agenda Surat
                                </div>
                                <div className="col-span-2 ml-4">
                                  {this.props.disposisi.NOMOR_AGENDA}
                                </div>

                                <div className="font-bold">Dari</div>
                                <div className="font-bold ml-4">Nama</div>
                                <div className="">
                                  : {this.props.SuratDetail.NAMA_PENGIRIM}
                                </div>
                                <div></div>
                                <div className="font-bold ml-4">Unit</div>
                                <div className="">
                                  <ul>
                                    {this.props.IdUnitKerja.map(
                                      (item, index) => {
                                        return (
                                          <li key={index}>
                                            {this.props.SuratDetail
                                              .ID_KODE_UNIT_KERJA ==
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
                                      },
                                    )}
                                  </ul>
                                </div>
                                <div></div>
                                <div className="font-bold ml-4">
                                  Penandatangan
                                </div>
                                <div className="">
                                  : {this.props.SuratDetail.PENANDATANGAN}
                                </div>

                                <div className="font-bold">Tujuan</div>
                                <div className="col-span-2 ml-4">
                                  {this.props.SuratDetail.TUJUAN_SURAT}
                                </div>

                                <div className="font-bold">Nomor Surat</div>
                                <div className="col-span-2 ml-4">
                                  {this.props.SuratDetail.NOMOR_SURAT}
                                </div>

                                <div className="font-bold">
                                  Perihal / Ringkasan Surat
                                </div>
                                <div className="col-span-2 ml-4 mb-4">
                                  {this.props.SuratDetail.PERIHAL}
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
                                    {this.props.SuratDetail.NOMOR_SURAT ==
                                    null ? (
                                      <> File kosong</>
                                    ) : (
                                      <>
                                        <PdfReader
                                          urlFile={this.props.url}
                                          namaFile={
                                            this.props.SuratDetail.NOMOR_SURAT.split(
                                              '/',
                                            ).join('_') +
                                            '_disposisi'
                                          }
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
                  )}
                </div>
              </div>
            </div>
            <div className="opacity-25 fixed inset-0 z-40 bg-black"></div>
            {/* </div>
            </div> */}
            {this.state.loading ? (
              <ModalLoading
                loading={this.state.loading}
                title={'Menyimpan data'}
              />
            ) : null}
          </>
        ) : (
          <></>
        )}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}

export default connect(mapStateToProps, {})(AddFormDisposisi)
{
  /* // export default AddFormDisposisi */
}
