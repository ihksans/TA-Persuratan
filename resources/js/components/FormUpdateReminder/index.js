import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
import Kalender from './Kalender'
import ModalLoading from '../ModalLoading'

class FormUpdateReminder extends Component {
    constructor(props) {
        super(props)
        this.state = {
            dir:[],
            rnDate: new Date(),
            idPengingat: this.props.idPengingat,
            idPengguna: this.props.idPengguna,
            idPencatatan: this.props.idPencatatan,
            status: this.props.status,
            waktuPengingat: this.props.waktuPengingat,
            deskripsiPengingat: this.props.deskripsiPengingat,
            noAgenda: this.props.noAgenda,
            derajatSurat: this.props.idDerajatSurat,
            showModal: true,
            errorWaktuPengingat: false,
            errorDeskripsi: false,  
            modalLoading: false,     
        }
        this.handleInputWaktuPengingat = this.handleInputWaktuPengingat.bind(this)
        this.handleInputDeskripsi = this.handleInputDeskripsi.bind(this)
        this.handleErrorWaktuPengingat = this.handleErrorWaktuPengingat.bind(this)
        this.handleErrorDeskripsi = this.handleErrorDeskripsi.bind(this)
        this.handleModal = this.handleModal.bind(this)
        this.onSubmit = this.onSubmit.bind(this)
        this.onDelete = this.onDelete.bind(this)
        this.validateInputWaktuPengingat = this.validateInputWaktuPengingat.bind(this)
        this.validateInputDeskripsi = this.validateInputDeskripsi.bind(this)
        this.handleLoading = this.handleLoading.bind(this)
    }
    handleModal() {
        this.setState({
          showModal: !this.state.showModal,
          modalLoading: false,
          idPengingat: this.props.idPengingat,
          idPengguna: this.props.idPengguna,
          idPencatatan: this.props.idPencatatan,
          status: this.props.status,
          waktuPengingat: this.props.waktuPengingat,
          deskripsiPengingat: this.props.deskripsiPengingat,
          noAgenda: this.props.noAgenda,
          derajatSurat: this.props.idDerajatSurat,
          errorWaktuPengingat: false,
          errorDeskripsi: false, 
        })
    }
    handleErrorWaktuPengingat(props){
        this.setState({
            errorWaktuPengingat: props,
        })
    }
    handleErrorDeskripsi(props){
        this.setState({
            errorDeskripsi: props,
        })
    }
    handleInputWaktuPengingat(wpDate, value){
        this.setState({
          waktuPengingat: wpDate,
        })
        this.setState({
          rnDate: value,
        })
    }
    handleInputDeskripsi(e){
        let value = e.target.value

        this.setState({
            deskripsiPengingat: value,
        })
    }
    handleLoading() {
        this.setState({
          modalLoading: !this.state.modalLoading,
        })
    }
    async onSubmit(e){
        e.preventDefault()
        if (this.state.deskripsiPengingat != this.props.deskripsiPengingat ||
            this.state.waktuPengingat != this.props.waktuPengingat
        ) {
            await this.validateInputWaktuPengingat(this.state.waktuPengingat)
            await this.validateInputDeskripsi(this.state.deskripsiPengingat)

            if (
                this.state.errorWaktuPengingat == false &&
                this.state.errorDeskripsi == false
            ) {
                this.handleLoading()
                api()
                .post('api/updatePengingat',{
                    ID_PENGINGAT: this.state.idPengingat,
                    ID_PENGGUNA: this.state.idPengguna,
                    ID_PENCATATAN: this.state.idPencatatan,
                    WAKTU_PENGINGAT: this.state.waktuPengingat,
                    DESKRIPSI: this.state.deskripsiPengingat,
                    STATUS: this.state.status,
                })
                .then((response) => {
                    this.setState({
                    item: {
                        idPengguna: '',
                        idPencatatan: '',
                        waktuPengingat: '',
                        deskripsiPengingat: '',
                        status: '',
                        },
                    })
                    this.handleLoading()
                    this.handleModal()
                    window.location.reload('/#/SuratMasuk')
                    // this.setState({
                    //   showModal: !this.state.showModal,
                    // })
                })
                .catch((err) => {
                    console.log(err)
                    this.handleLoading()
                })
                console.log('valid form')
                
            } else {
                console.log('error form')
            }
        }
    }
    async onDelete(){
      await api()
        .delete('/api/deletePengingat/' + this.state.ID_PENGINGAT)
        .then((response) =>{
            console.log('respon:' + response)
            console.log('pengingat telah terhapus')
            this.handleLoading()
            window.location.reload('/#/SuratMasuk')
          })
          .catch((error) => {
            console.log(error)
            this.handleLoading()
          })
    }

    validateInputWaktuPengingat(input){
        if (input == null) {
            this.handleErrorWaktuPengingat(true)
        } else {
            this.handleErrorWaktuPengingat(false)
        }
    }

    validateInputDeskripsi(input){
        if (input == null || input == '') {
            this.handleErrorDeskripsi(true)
        } else {
            this.handleErrorDeskripsi(false)
        }
    }
// this.props.pengingat.ID_PENGINGAT
    render(){
        return(
            <>
            {this.state.showModal ? (
            <>
              <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
                <div className="relative w-full my-6 h-90% mx-auto max-w-6xl">
                  {/*content*/}
                  <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full h-full bg-white outline-none focus:outline-none">
                    {/*header*/}
                    <div className="flex items-start justify-center ">
                      <button
                        className="p-1 ml-auto  float-right  leading-none  outline-none hover:shadow-md focus:outline-none"
                        onClick={this.handleModal}
                      >
                        <img
                          className="justify-center items-center"
                          src="assets/img/icon/x.png"
                        />
                      </button>
                    </div>
                    <div className="flex flex-row items-start p-2 border-b ml-6 border-solid border-blueGray-200 rounded-t">
                      <div>
                        <img className="w-8" src="assets/img/icon/Surat.png" />
                      </div>
                      <div className="flex ">
                        <h3 className="text-xl font-semibold  ">Edit Pengingat Surat</h3>
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
                            <div className="">
                              <div className="flex flex-row grid grid-cols-2">
                                <div>
                                  <div className="flex flex-row grid grid-cols-2">
                                    <div
                                      htmlFor="nama"
                                      className="text-sm mb-2 font-bold flex flex-row "
                                    >
                                      <div>Nomor Agenda </div>
                                      <div className="text-danger ml-2"> *</div>
                                    </div>
                                    <div className="justify-end ">
                                      {this.props.noAgenda}
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
                                    {this.props.RDerajatSurat.allDerajatSuratInfo.map(
                                        (item, index) => {
                                            const temp = this.props.idDerajatSurat
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
                                    {/* {this.props.derajatSurat} */}
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div className="flex flex-row grid grid-cols-2">
                                    <div
                                      htmlFor="nama"
                                      className="text-sm mb-2 font-bold flex flex-row "
                                    >
                                      <div>Batas Waktu </div>
                                      <div className="text-danger ml-2"> *</div>
                                    </div>
                                    <div className="justify-end ">
                                      <div
                                        type="text"
                                        name="waktuPengingat"
                                        required
                                        id="waktuPengingat"
                                        value={this.state.waktuPengingat}
                                        className={
                                          'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none	w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                        }
                                      >
                                        <Kalender
                                          onChange={(wpDate) =>
                                            this.handleInputWaktuPengingat(wpDate)
                                          }
                                          minDate={this.state.rnDate}
                                        />
                                      </div>
                                      {this.state.errorWaktuPengingat ? (
                                        <div className="text-danger text-xs mb-3">
                                          Batas waktu harus diisi
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
                                      <div>Deskripsi </div>
                                      <div className="text-danger ml-2"> *</div>
                                    </div>
                                    <div className="justify-end ">
                                      <input
                                        type="text"
                                        name="deskripsiPengingat"
                                        required
                                        id="deskripsiPengingat"
                                        value={this.state.deskripsiPengingat}
                                        className={
                                          'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none  w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                        }
                                        onChange={this.handleInputDeskripsi}
                                      />
                                      {this.state.errorDeskripsi ? (
                                        <div className="text-danger text-xs mb-3">
                                          Deskripsi harus diisi
                                        </div>
                                      ) : (
                                        <></>
                                      )}
                                    </div>
                                  </div>
                                  
                                  <div className="flex flex-row grid grid-cols-2 mb-4 mt-4 p-2">
                                    <div></div>
                                    <div className="text-xs text-abu">
                                      Keterangan (*): data wajib diisi.
                                    </div>
                                  </div>
                                  <div className="flex flex-row grid grid-cols-2">
                                    {/* <div></div> */}
                                    <button
                                      type="submit"
                                      className=" w-2/3 p-1 border-2 rounded-md text-sm text-white font-bold bg-biru justify-center align-center"
                                      onClick={this.onDelete}
                                      value="Nonactived Reminder"
                                    >
                                      Hapus Pengingat
                                    </button>
                                    <button
                                      type="submit"
                                      className=" w-2/3 p-1 border-2 rounded-md text-sm text-white font-bold bg-biru justify-center align-center"
                                      onClick={this.onSubmit}
                                      value="Update Reminder"
                                    >
                                      Simpan Pengingat
                                    </button>
                                  </div>
                                </div>
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
          <ModalLoading
            loading={this.state.modalLoading}
            title={'Sedang diproses sistem'}
          />
            </>
        )
    }
}

function mapStateToProps(state) {
    return state
  }
  export default connect(mapStateToProps, {})(FormUpdateReminder)