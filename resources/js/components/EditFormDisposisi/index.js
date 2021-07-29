import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
import Kalender from '../AddFormSurat/Kalender'
import ModalLoading from '../ModalLoading'
import { divIcon } from 'leaflet'
// import DetailDisposisi from '../DetailDisposisi'

class EditFormDisposisi extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir:[],
      showModal: this.props.showModal,
      modalLoading: false,

      idDiposisi:this.props.disposisi.ID_DISPOSISI,
      informasiDisposisi:this.props.disposisi.INFORMASI,
      keteranganDisposisi:this.props.disposisi.PROSES_SELANJUTNYA,
      pengguna: this.props.disposisi.ID_PENGGUNA,
      // nomorAgenda: this.props.disposisi.NOMOR_AGENDA,
      tanggalDisposisi: this.props.disposisi.TANGGAL_DISPOSISI,
      // tujuanSurat: this.props.TUJUAN_SURAT,
      informasi: this.props.disposisi.INFORMASI,
      prosesSelanjutnya: this.props.disposisi.PROSES_SELANJUTNYA,

      errInformasiDisposisi:false,
      errKeteranganDisposisi:false,

    }
    this.handleModal = this.handleModal.bind(this)
    this.onSubmit = this.onSubmit.bind(this)
    this.handleLoading = this.handleLoading.bind(this)

    this.handleInformasiDisposisi=this.handleInformasiDisposisi.bind(this)
    this.handleKeteranganDisposisi=this.handleKeteranganDisposisi.bind(this)
    this.handleInputChangeCustom = this.handleInputChangeCustom.bind(this)

    this.handleErrInformasiDisposisi=this.handleErrInformasiDisposisi.bind(this)
    this.handleErrKeteranganDisposisi=this.handleErrKeteranganDisposisi.bind(this)

    this.validateInformasiDisposisi=this.validateInformasiDisposisi.bind(this)
    this.validateKeteranganDIsposisi=this.validateKeteranganDIsposisi.bind(this)
  }



  validateInformasiDisposisi(input){
    if(input == null || input == ''){
      this.handleErrInformasiDisposisi(true)
    }else{
      this.handleErrInformasiDisposisi(false)
    }
  }
  validateKeteranganDIsposisi(input){
    if(input == null || input == ''){
      this.handleErrKeteranganDisposisi(true)
    }else{
      this.handleErrKeteranganDisposisi(false)
    }
  }


  handleErrInformasiDisposisi(props){
    this.setState({
      errInformasiDisposisi:props,
    })
  }
  handleErrKeteranganDisposisi(props){
    this.setState({
      errKeteranganDisposisi:props,
    })
  }


  handleInformasiDisposisi(e){
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')
    this.setState({
      informasiDisposisi:str,
    })
  }

  handleKeteranganDisposisi(e){
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')
    this.setState({
      keteranganDisposisi:str,
    })
  }
  handleLoading(){
    this.setState({
      modalLoading: !this.state.modalLoading,
    })
  }
  handleInputChangeCustom(e, index) {
    const { name, value } = e.target
    let str = ''
    str = name.replace(/\s\s+/g, '')
    const list = [...this.state.inputListSelect]
    list[index][str] = value
    this.handleInputListSelect(list)
  }
  async handleModal(){
    this.setState({
      showModal: !this.state.showModal,
      modalLoading: false,

      // idDiposisi:this.props.disposisi.ID_DISPOSISI,
      // informasiDisposisi:this.props.disposisi.INFORMASI,
      // keteranganDisposisi:this.props.disposisi.PROSES_SELANJUTNYA,

      errInformasiDisposisi: false,
      errKeteranganDisposisi: false,



    })
    console.log('ini edit disposisis')
    // console.log('detail surat: '+ this.props.SuratDetail)
    // console.log('detail disposisi: '+ this.props.disposisi)

    // console.log('detail disposisi: '+ this.props.disposisi) 
    // console.log('tujuan surat: '+ this.props.TujuanSurat)
    // console.log('ID pencatatan: '+ this.props.IdPencatatan)
    // console.log('Jenis surat: '+ this.props.IdJenisSurat)
    // // console.log('id kode unit kerja: '+ this.props.IdUnitKerja)
    // console.log('kode unit kerja: '+ this.props.UnitKerja)
    // console.log('nomor surat masuk: '+ this.props.NomorSurat)
    // console.log('id surat masuk: '+ this.props.SuratMasuk)
    // console.log('id surat masuk: '+ this.props.SuratMasuk.ID_DISPOSISI)
    // console.log('id surat masuk: '+ this.props.SuratMasuk.INFORMASI)
    // console.log('id surat masuk: '+ this.props.SuratMasuk.PROSES_SELANJUTNYA)
    // console.log('pencatatan: '+ this.props.Pencatatan)
    // console.log('id disposisi: '+ this.props.disposisi.ID_DISPOSISI)

    console.log('surat detail......')
    console.log('tanggal detail '+this.props.disposisi.TANGGAL_DISPOSISI)
    console.log('detail disposisi '+this.props.disposisi)
    console.log('tujuan surat '+this.props.TujuanSurat)
    console.log('IdPencatatan '+this.props.IdPencatatan)
    console.log('IdJenisSurat '+this.props.IdJenisSurat)
    console.log('SuratMasuk '+this.props.SuratMasuk)
    console.log('IdUnitKerja '+this.props.IdUnitKerja)
    console.log('UnitKerja '+this.props.UnitKerja)
    console.log('NomorSurat '+this.props.NomorSurat)
    console.log('Pencatatan '+this.props.Pencatatan)

    console.log('namaFile '+this.props.namaFile)
    console.log('namaLampiran '+this.props.namaLampiran)
    console.log('jenisSurat '+this.props.jenisSurat)
    console.log('disposisi '+this.props.disposisi)
    console.log('pengingatS '+this.props.pengingatS)
    console.log('countDays '+this.props.countDays)
    
    // console.log('detail disposisi jenis surat: '+ this.props.Disposisi.JENIS_SURAT)
  }
  
  async onSubmit(e){
    e.preventDefault()
      // await this.validateInformasiDisposisi(this.state.informasiDisposisi)
      // await this.validateKeteranganDIsposisi(this.state.keteranganDisposisi)
      // if(
      //   this.state.errInformasiDisposisi == false &&
      //   this.state.errInformasiDisposisi == false
      // ){
      //   this.handleLoading()
      //   await api()
      //   .post('api/updateDisposisi',{
      //     informasiDisposisi: this.state.informasiDisposisi, 
      //     keteranganDisposisi: this.state.keteranganDisposisi,
      //   })
      //   .then((Response)=>{
      //     this.setState({
      //       item:{
      //         informasiDisposisi: '',
      //         keteranganDisposisi:'',
      //       }
      //     })
      //     this.handleLoading()
      //     this.handleModal()
      //     window.location.reload('/#/Disposisi')
      //   })
      //   .catch((err)=>{
      //     console.log(err)
      //     this.handleLoading()
      //   })
    // if(
    //   // this.state.informasiDisposisi != this.props.disposisi.INFORMASI ||
    //   // this.state.keteranganDisposisi != this.props.disposisi.PROSES_SELANJUTNYA
    // ) {
    //   await this.validateInformasiDisposisi(this.state.informasiDisposisi)
    //   await this.validateKeteranganDIsposisi(this.state.keteranganDisposisi)
      

    //   if(
    //     this.state.errInformasiDisposisi == false &&
    //     this.state.errInformasiDisposisi == false
    //   ){
    //     this.handleLoading()
    //     // let fd = new FormData()
    //     let formData = new FormData()
    //     // formData.append('id',this.props.disposisi.ID_DISPOSISI)
    //     // formData.append('informasi', this.state.informasiDisposisi)
    //     // formData.append('proses_selanjutnya', this.state.keteranganDisposisi)

    //     await api()
    //     .post('api/updateDisposisi',formData)
    //     .then((response)=>{
    //       // this.setState({
    //       //   item:{
    //       //     informasiDisposisi: '',
    //       //     keteranganDisposisi: '',
    //       //   },
    //       // })
    //       this.handleLoading()
    //       this.handleModal()
    //       window.location.reload('/#/Disposisi')
    //     })
    //     .catch((err)=>{
    //       console.log(err)
    //       this.handleLoading()
    //     })
        
    //   }
    
    
    //     // console.log('valid form')
    // }else{
    //   // console.log('error form')
    //   this.handleModal()
    // }
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
            Edit Data {' '}
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
                    {this.props.SuratDetail.NOMOR_AGENDA}
                    
                    </div>
                    <div className="font-bold">Dari</div>
                    <div className="font-bold">Nama</div>
                    <div className="">: 
                      {this.props.SuratDetail.NAMA_PENGIRIM}{' '}
                    </div>
                    <div></div>
                    <div className="font-bold">Unit</div>
                    <div className="">
                      <div className="">
                        <p>
                          : {this.props.SuratDetail.UNIT_PENGIRIM} -{' '}
                          {this.props.SuratDetail.UNIT_PENGIRIM}
                        </p>
                      </div>
                    </div>
                    <div></div>
                    <div className="font-bold">Penandatangan</div>
                    <div className="">: 
                      {this.props.SuratDetail.PENANDATANGAN}
                    </div>
                    <div className="font-bold">Tujuan</div>
                    <div className=" col-span-2">
                    {this.props.tujuanDisposisi.map((item, i) => {
                      return (
                        <div
                        key={i}
                        className={i == 0 ? ' col-span-2' : ' col-span-3'}
                      >
                        <div
                          className={
                            i == 0 ? '' : 'flex flex-row grid grid-cols-3'
                          }
                        >
                          <div></div>
                          <div className={i == 0 ? '' : ' col-span-2'}>
                            - {item.KODE_UNIT_KERJA} :{' '}
                            {item.NAMA_UNIT_KERJA}
                          </div>
                        </div>
                      </div>
                      )
                    })}
                    </div>
                    <div className="font-bold">Nomor Surat </div>
                    <div className=" col-span-2">
                      {this.props.SuratDetail.NOMOR_SURAT}
                    </div>
                    <div className="font-bold">Tanggal Surat </div>
                    <div className=" col-span-2">
                      {this.props.tglSurat}
                    </div>
                    <div className="font-bold">Tanggal Terima </div>
                    <div className=" col-span-2">
                      {this.props.tglDiterima}
                    </div>
                    <div className="font-bold">Perihal / Ringkasan Surat </div>
                    <div className=" col-span-2">
                      {this.props.SuratDetail.PERIHAL}
                    </div>
                    <div className="font-bold">Kode Hal </div>
                    <div className=" col-span-2">
                    {this.props.SuratDetail.JENIS_SURAT}
                    </div>
                    <div className="font-bold">Jenis Surat </div>
                    <div className=" col-span-2">
                      {this.props.SuratDetail.JENIS_SURAT}
                    </div>
                    <div className="font-bold">Sifat Surat </div>
                    <div className=" col-span-2">
                    {this.props.SuratDetail.SIFAT_NASKAH}
                    </div>
                    <div className="font-bold">Derajat Surat</div>
                    <div className=" col-span-2">
                    {this.props.SuratDetail.DERAJAT_SURAT}
                    </div>
                    <div className="font-bold">Kode Arsip</div>
                    <div className="font-bold">Kom</div>
                    <div className="">: 
                      {this.props.SuratDetail.KODE_ARSIP_KOM}
                    </div>
                    <div></div>
                    <div className="font-bold">Hlm</div>
                    <div className="">: 
                      {this.props.SuratDetail.KODE_ARSIP_HLM}
                    </div>
                    <div></div>
                    <div className="font-bold">Manual</div>
                    <div className="">: 
                      {this.props.SuratDetail.KODE_ARSIP_MANUAL}
                    </div>
                    <div className="font-bold">Keterangan</div>
                    <div className=" col-span-2">
                      {this.props.disposisi.PROSES_SELANJUTNYA}
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
                              {this.props.disposisi.NOMOR_AGENDA}
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
                              value={this.state.tanggalDisposisi}
                              className={
                                'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	mr-4  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                              }
                            >
                              {/* {this.props.disposisi.TANGGAL_DISPOSISI} */}
                              <Kalender
                                onChange={(exDate, value) =>
                                this.handleTglDisposisi(
                                  value,
                                  exDate,
                                  )
                                }
                                data={null}
                              />
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
                              {this.props.inputListSelect.map(
                                (x, i)=>{
                                  return(
                                    <div>
                                      {x.idUnit != null ||
                                      x.idUnit != undefined?(
                                        <>
                                          <select
                                          name="idUnit"
                                          placeholder="Masukan nama unit"
                                          value={x.idUnit}
                                          onChange={(e)=>
                                            this.handleInputChangeCustom(
                                              e,
                                              i,
                                            )
                                          }
                                          required
                                          id="tujuanSurat"
                                          className={
                                            'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none  w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                          }
                                        >
                                          <option value="0">
                                            Pilih Tujuan ...
                                          </option>
                                          {this.props.RUnitKerja.allUnitKerjaInfo.map(
                                            (item)=>{
                                              return(
                                                <option
                                                  key={
                                                    item.ID_KODE_UNIT_KERJA
                                                  }
                                                  value={
                                                    item.ID_KODE_UNIT_KERJA
                                                  }
                                                >
                                                  {
                                                    item.KODE_UNIT_KERJA
                                                  }
                                                  -
                                                  {
                                                    item.NAMA_UNIT_KERJA
                                                  }
                                                </option>
                                              )
                                            },
                                          )}
                                        </select>
                                        {x.err == true?(
                                          <div className="text-danger text-xs mb-3">
                                            Tujuan surat harus diisi
                                          </div>
                                        ):null}
                                    </>
                                    ):
                                    (
                                      <>
                                        <input
                                        name="namaUnit"
                                        placeholder="Masukan nama unit"
                                        value={x.namaUnit}
                                        onChange={(e) =>
                                          this.handleInputChangeCustom(
                                            e,
                                            i,
                                          )
                                        }
                                        required
                                        id="tujuanSurat"
                                        className={
                                          'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none  w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                        }
                                        />
                                        <input
                                          className="ml10"
                                          name="kodeUnit"
                                          placeholder="Masukan kode unit"
                                          value={x.kodeUnit}
                                          required
                                          id="tujuanSurat"
                                          className={
                                            'focus:form-control  mb-1 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none  w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 '
                                          }
                                          onChange={(e) =>
                                            this.handleInputChangeCustom(
                                              e,
                                              i,
                                            )
                                          }
                                        />
                                        {x.err == true ? (
                                          <div className="text-danger text-xs mb-3">
                                            Kode unit, Nama unit harus
                                            diisi dan hanya huruf
                                            angka
                                          </div>
                                        ) : null}
                                      </>
                                    )
                                    }
                                </div>
                                )}
                              )}
                            </div>
                          </div>
                          {/* <div className="justify-end ">
                            <div className="flex flex-row">
                              <select
                              type="text"
                              name="tujuanDisposisi"
                              required
                              id="tujuanDisposisi"
                              className={
                                'focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                              }
                              // value={this.state.tujuanDisposisi}
                              // onChange={this.handleTujuanDisposisi}
                              >
                                <option value="0">
                                  Pilih tujuan ...
                                </option>
                                
                              </select>
                            </div>
                          </div> */}
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
                              value={this.state.informasiDisposisi}
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
                              value={this.state.keteranganDisposisi}
                              className={
                                'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                              }
                              onChange={this.handleKeteranganDisposisi}
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
                              // onChange={this.onFileChange}
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
        ):null}
        <ModalLoading
        loading={this.state.modalLoading}
        title={'Sedang diproses sistem'}
        />
      </>
    )
  }
}
function mapStateProps(state){
  return state
}
export default connect(mapStateProps,{})(EditFormDisposisi)
