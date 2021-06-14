import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
// import createuser from "./index";
class AddFormSurat extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir: [],
      surat: null,
      jenisSurat: [],
      lampiran: null,
      idPencatatan: null,
      idPengguna: null,
      idJenisSurat: '',
      kodeArsipKom: null,
      kodeArsipHlm: null,
      kodeArsipManual: null,
      namaFileSurat: null,
      namaFileLampiran: null,
      derajatSurat: '',
      nomorSurat: null,
      unitPengirim: '',
      penandatangan: null,
      namaPengirim: null,
      tujuanSurat: '',
      perihal: null,
      tglDiterima: null,
      tglSurat: null,
    }
    this.onSubmit = this.onSubmit.bind(this)
    this.handleModal = this.handleModal.bind(this)
    this.onFileChange = this.onFileChange.bind(this)
    this.onFileChange2 = this.onFileChange2.bind(this)
    this.handleIdPencatatan = this.handleIdPencatatan.bind(this)
    this.handleIdPengguna = this.handleIdPengguna.bind(this)
    this.handleIdJenisSurat = this.handleIdJenisSurat.bind(this)
    this.handleKodeArsipKom = this.handleKodeArsipKom.bind(this)
    this.handleKodeArsipManual = this.handleKodeArsipManual.bind(this)
    this.handleKodeArsipHlm = this.handleKodeArsipHlm.bind(this)
    this.handleNamaFileSurat = this.handleNamaFileSurat.bind(this)
    this.handleNamaFileLampiran = this.handleNamaFileLampiran.bind(this)
    this.handleDerajatSurat = this.handleDerajatSurat.bind(this)
    this.handleNomorSurat = this.handleNomorSurat.bind(this)
    this.handleUnitPengirim = this.handleUnitPengirim.bind(this)
    this.handlePenandatangan = this.handlePenandatangan.bind(this)
    this.handleNamaPengirim = this.handleNamaPengirim.bind(this)
    this.handleTujuanSurat = this.handleTujuanSurat.bind(this)
    this.handlePerihal = this.handlePerihal.bind(this)
    this.handleTglDiterima = this.handleTglDiterima.bind(this)
    this.handleTglSurat = this.handleTglSurat.bind(this)
  }
  handleIdPencatatan(e) {
    let value = e.target.value

    this.setState({
      idPencatatan: value,
    })
  }
  handleIdPengguna(e) {
    let value = e.target.value

    this.setState({
      idPengguna: value,
    })
  }
  handleIdJenisSurat(e) {
    let value = e.target.value

    this.setState({
      idJenisSurat: value,
    })
  }
  handleKodeArsipKom(e) {
    let value = e.target.value

    this.setState({
      kodeArsipKom: value,
    })
  }
  handleKodeArsipManual(e) {
    let value = e.target.value

    this.setState({
      kodeArsipManual: value,
    })
  }
  handleKodeArsipHlm(e) {
    let value = e.target.value

    this.setState({
      kodeArsipHlm: value,
    })
  }
  handleNamaFileSurat(e) {
    let value = e.target.value

    this.setState({
      namaFileSurat: value,
    })
  }
  handleNamaFileLampiran(e) {
    let value = e.target.value

    this.setState({
      namaFileLampiran: value,
    })
  }
  handleDerajatSurat(e) {
    let value = e.target.value

    this.setState({
      derajatSurat: value,
    })
  }
  handleNomorSurat(e) {
    let value = e.target.value

    this.setState({
      nomorSurat: value,
    })
  }
  handleUnitPengirim(e) {
    let value = e.target.value

    this.setState({
      unitPengirim: value,
    })
  }
  handlePenandatangan(e) {
    let value = e.target.value

    this.setState({
      penandatangan: value,
    })
  }
  handleNamaPengirim(e) {
    let value = e.target.value

    this.setState({
      namaPengirim: value,
    })
  }
  handleTujuanSurat(e) {
    let value = e.target.value

    this.setState({
      tujuanSurat: value,
    })
  }
  handlePerihal(e) {
    let value = e.target.value

    this.setState({
      perihal: value,
    })
  }
  handleTglDiterima(e) {
    let value = e.target.value

    this.setState({
      tglDiterima: value,
    })
  }
  handleTglSurat(e) {
    let value = e.target.value

    this.setState({
      tglSurat: value,
    })
  }
  handleModal() {
    this.setState({
      showModal: !this.state.showModal,
    })
  }

  onFileChange(event) {
    // Update the state
    this.setState({ surat: event.target.files[0] })
  }
  onFileChange2(event) {
    // Update the state
    this.setState({ lampiran: event.target.files[0] })
  }
  async onSubmit(e) {
    e.preventDefault()

    let formData = new FormData()
    formData.append('id_pengguna', 51)
    formData.append('id_jenis_surat', this.state.idJenisSurat)
    formData.append('kode_arsip_kom', this.state.kodeArsipKom)
    formData.append('kode_arsip_hlm', this.state.kodeArsipHlm)
    formData.append('kode_arsip_manual', this.state.kodeArsipManual)
    formData.append('nama_file_surat', this.state.nomorSurat)
    formData.append('nama_file_lampiran', this.state.nomorSurat + '_lampiran')
    formData.append('derajat_surat', this.state.derajatSurat)

    let fd = new FormData()
    fd.append('id_pengguna', 51)
    fd.append('id_jenis_surat', this.state.idJenisSurat)
    fd.append('kode_arsip_kom', this.state.kodeArsipKom)
    fd.append('kode_arsip_hlm', this.state.kodeArsipHlm)
    fd.append('kode_arsip_manual', this.state.kodeArsipManual)
    fd.append('nama_file_surat', this.state.nomorSurat)
    fd.append('nama_file_lampiran', this.state.nomorSurat + '_lampiran')
    fd.append('derajat_surat', this.state.derajatSurat)
    fd.append('nomor_surat', this.state.nomorSurat)
    fd.append('unit_pengirim', this.state.unitPengirim)
    fd.append('penandatangan', this.state.penandatangan)
    fd.append('nama_pengirim', this.state.namaPengirim)
    fd.append('tujuan_surat', this.state.tujuanSurat)
    fd.append('perihal', this.state.perihal)
    fd.append('tgl_diterima', this.state.tglDiterima)
    fd.append('tgl_surat', this.state.tglSurat)
    await api()
      .post('api/setPencatatan', formData)
      .then((response) => {
        this.setState({
          idPencatatan: response.data.content.id,
        })
        console.log('pencatatan form' + response.data.content.id)
        console.log('pencatatan form 2' + response.data)

        fd.append('id_pencatatan', response.data.content.id)

        api()
          .post('api/setSuratMasuk', fd)
          .then((response) => {
            console.log('surat Masuk form' + response)
          })
          .catch((err) => console.log(err))
      })
      .catch((err) => console.log(err))

    let fd2 = new FormData()

    fd2.append('myFile', this.state.surat)
    fd2.append('namefile', this.state.nomorSurat)

    api()
      .post('api/addSurat', fd2)
      .then((response) => {
        console.log('valid form' + response)
        // this.handleModal()
      })
      .catch((err) => console.log(err))

    let fd3 = new FormData()

    fd3.append('myFile', this.state.lampiran)
    fd3.append('namefile', this.state.nomorSurat + '_lampiran')

    api()
      .post('api/addSurat', fd3)
      .then((response) => {
        console.log('valid form' + response)
        this.handleModal()
      })
      .catch((err) => console.log(err))
  }
  componentDidMount() {
    api()
      .get('api/getAllJenisSurat')
      .then((response) => {
        this.setState({
          jenisSurat: response.data,
        })
        console.log('jenis surat:', this.state.jenisSurat)
      })
  }
  render() {
    return (
      <>
        <button
          className="flex flex-row bg-primary p-2 mt-4"
          type="button"
          onClick={this.handleModal}
        >
          <div>
            <img
              className="justify-center items-center"
              src="assets/img/icon/Tambah.png"
            />
          </div>
          <div className="font-bold ml-1">Tambah Surat</div>
        </button>

        {this.state.showModal ? (
          <>
            <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
              <div className="relative w-auto my-6 mx-auto max-w-6xl">
                {/*content*/}
                <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                  {/*header*/}
                  <div className="flex items-start justify-center ">
                    <button
                      className="p-1 ml-auto  border-2 float-right  leading-none  outline-none focus:outline-none"
                      onClick={this.handleModal}
                    >
                      <img
                        className="justify-center items-center"
                        src="assets/img/icon/x.png"
                      />
                    </button>
                  </div>
                  <div className=" items-start justify-center p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <div className=" flex justify-center">
                      <img
                        className="justify-self-center"
                        src="assets/img/icon/User-Circle.png"
                      />
                    </div>
                    <div className="flex justify-center">
                      <h3 className="text-3xl font-semibold  ">Tambah Surat</h3>
                    </div>
                  </div>

                  {/*body*/}
                  <div className="relative p-6 flex-auto">
                    <div className="my-4 text-blueGray-500 text-lg leading-relaxed">
                      {/* <FormData /> */}
                      <form
                        className="mt-8"
                        action="#"
                        method="POST"
                        onSubmit={this.onSubmit}
                      >
                        <div>
                          <div className="rounded-md shadow-sm ">
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Nomor Surat </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="nomorSurat"
                                  required
                                  id="nomorSurat"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handleNomorSurat}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Tanggal Surat </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="tglSurat"
                                  required
                                  id="tglSurat"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handleTglSurat}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Tanggal Diterima </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="tglDiterima"
                                  required
                                  id="tglDiterima"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handleTglDiterima}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Perihal </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="perihal"
                                  required
                                  id="perihal"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handlePerihal}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Tujuan Surat </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <select
                                  type="text"
                                  name="tujuanSurat"
                                  required
                                  id="tujuanSurat"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.tujuanSurat}
                                  onChange={this.handleTujuanSurat}
                                >
                                  <option value="0">Pilih tujuan ...</option>
                                  <option value="1">R-1</option>
                                  <option value="2">R-2</option>
                                </select>
                              </div>
                            </div>

                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Unit Pengirim </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <select
                                  type="text"
                                  name="unitPengirim"
                                  required
                                  id="unitPengirim"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.unitPengirim}
                                  onChange={this.handleUnitPengirim}
                                >
                                  <option value="0">Pilit unit pengirim</option>
                                  <option value="1">JTK</option>
                                  <option value="2">KIMIA</option>
                                </select>
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Nama Pengirim </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="namaPengirim"
                                  required
                                  id="namaPengirim"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handleNamaPengirim}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Penandatangan </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="penandatangan"
                                  required
                                  id="penandatangan"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handlePenandatangan}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Jenis Surat </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <select
                                  type="text"
                                  name="jenisSurat"
                                  required
                                  id="jenisSurat"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.idJenisSurat}
                                  onChange={this.handleIdJenisSurat}
                                >
                                  <option value="0">
                                    Pilih Jenis Surat ...
                                  </option>
                                  {this.state.jenisSurat.map((item, index) => {
                                    return (
                                      <option
                                        key={item.ID_JENIS_SURAT}
                                        value={item.ID_JENIS_SURAT}
                                      >
                                        {item.JENIS_SURAT}
                                      </option>
                                    )
                                  })}
                                  {/* <option value="1">Khusus</option>
                                  <option value="2">Arahan</option> */}
                                </select>
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Derajat Surat </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <select
                                  type="text"
                                  name="derajatSurat"
                                  required
                                  id="derajatSurat"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.derajatSurat}
                                  onChange={this.handleDerajatSurat}
                                >
                                  <option value="0">
                                    Pilih Derajat Surat ...
                                  </option>
                                  <option value="1">Segera</option>
                                  <option value="2">Biasa</option>
                                </select>
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Kode Arsip Komputer </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="kodeArsipKom"
                                  required
                                  id="kodeArsipKom"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handleKodeArsipKom}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Kode Arsip Hlm </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="kodeArsipHlm"
                                  required
                                  id="kodeArsipHlm"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handleKodeArsipHlm}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Kode Arsip Manual </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="kodeArsipManual"
                                  required
                                  id="kodeArsipManual"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.handleKodeArsipManual}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Surat </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="file"
                                  name="surat"
                                  required
                                  id="surat"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.onFileChange}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Lampiran </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="file"
                                  name="lampiran"
                                  required
                                  id="lampiran"
                                  className={
                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  onChange={this.onFileChange2}
                                />
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2 mb-4 mt-4">
                              <div></div>
                              <div className=" text-xs text-abu ">
                                Keterangan (*): data wajib diisi.
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div></div>
                              <button
                                type="submit"
                                className=" w-1/2 p-1 border-2 rounded-md  bg-biru justify-center align-center"
                                onClick={this.onSubmit}
                                value="Add Pengguna"
                              >
                                <div className="text-sm mb-2 text-white	h-6 font-bold ">
                                  Tambah
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="opacity-25 fixed inset-0 z-40 bg-black"></div>
          </>
        ) : null}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, {})(AddFormSurat)
