import axios from 'axios'
import api from '../../service/api'
import React, {Component, useState} from 'react'
import {connect} from 'react-redux'
import Kalender from '../AddFormSurat/Kalender'
import ModalKonfirmDeleteDispo from '../ModalKonfirmDeleteDispo'
import EditFormDisposisi from '../EditFormDisposisi'

class DetailDisposisi extends Component{
    constructor(props){
        super(props)
        this.state={
            dir:[],
            // pengguna: this.props.AllUser.allUserInfo,
            // disposisi: this.props.AllDisposisi.allDisposisiInfo,
        }
        this.handleModal = this.handleModal.bind(this)
        this.onSubmit = this.onSubmit.bind(this)
    }
    async handleModal(){
        await this.setState({
            showModal: !this.state.showModal,
        })
    }
    async onSubmit(e){
        e.preventDefault()
    }
    render(){
        return(
            <>
                {/* <button
                className="flex flex-row bg-primary p-2 mt-4"
                type="button"
                
                >
                    <div>
                        <img
                        className="h-6 align-middle"
                        src="assets/img/icon/Tambah.png"/>
                    </div>
                    <div className="font-bold ml-1 mr-2">Tambah Disposisi</div>
                </button> */}
                <button
                    className="flex flex-row bg-primary font-bold items-center ml-2 mt-1  rounded p-2 shadow-sm w-75%"
                    type="button"
                    onClick={this.handleModal}
                >
                    {/* <div className="ml-1">
                        <img
                        className="h-4 align-middle"
                        src="assets/img/icon/Surat.png"
                        />
                    </div> */}
                    <div className="font-bold text-putih ml-1 mr-2">
                        Lihat Detail
                    </div>
                </button>
                {this.state.showModal?(
                    <>
                        {/* {this.state.showModal?(
                        <>
                            <button
                                className="flex flex-row bg-primary font-bold items-center ml-2 mt-1  rounded p-2 shadow-sm w-75%"
                                type="button"
                                onClick={this.handleModal}
                            >
                            <div className="ml-1">
                                <img
                                className="h-6 align-middle"
                                src="assets/img/icon/Tambah.png"
                                />
                            </div>
                            <div className="font-bold text-putih ml-1 mr-2">
                                Tambah Disposisi
                            </div>
                            </button>
                            </>
                        ): */}
                        
                        <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
                            <div className="relative w-auto my-6 mx-auto max-w-6xl">
                                {/* content */}
                                <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-abu outline-none focus:outline-none">
                                {/* Header */}
                                    <div className="flex flex-row grid grid-cols-2 mr-8">
                                        <div className="flex flex-row grid grid-cols-3 bg-white p-4">
                                            <div className="flex flex-row items-start p-2 border-b ml-6 border-solid border-blueGray-200 rounded-t col-span-3">
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
                                                    <EditFormDisposisi />
                                                        
                                                    <button
                                                        type="submit"
                                                        className="bg-primary font-bold 	self-center ml-2 mt-1  rounded p-1 shadow-sm w-full"
                                                        >
                                                        Ekspor ke PDF
                                                    </button>
                                                        <ModalKonfirmDeleteDispo />
                                                        {/* <button
                                                        className="bg-danger font-bold 	self-center ml-2 mt-1  rounded p-1 shadow-sm w-full"
                                                        type="button"
                                                        >
                                                        <div className="ml-1">
                                                            <img
                                                            className="h-4 align-middle"
                                                            src="assets/img/icon/Surat.png"
                                                            />
                                                        </div>
                                                        <div className="font-bold text-putih ml-1 mr-2">
                                                            Hapus disposisi
                                                        </div>
                                                        </button> */}
                                                </div>
                                            
                                            
                                            <div className="font-bold">No. Agenda Disposisi</div>
                                            <div className="col-span-2"> 
                                                {this.props.DisposisiDetail.NOMOR_AGENDA}
                                                {/* {this.state.NomorAgenda.NOMOR_AGENDA} */}
                                                
                                            </div>

                                            <div className="font-bold">Nomor Disposisi </div>
                                            <div className="col-span-2"> 
                                                {this.props.DisposisiDetail.NOMOR_DISPOSISI}
                                                {/* {this.state.NomorAgenda.NOMOR_AGENDA} */}
                                                
                                            </div>

                                            <div className="font-bold">Tanggal Disposisi</div>
                                            <div className="col-span-2">
                                                {this.props.DisposisiDetail.TANGGAL_DISPOSISI}
                                            </div>
                                            <div className="font-bold">Tujuan </div>
                                            <div className="col-span-2"> 
                                                {this.props.DisposisiDetail.TUJUAN_SURAT}
                                            </div>
                                            
                                            <div className="font-bold">Informasi / Isi Disposisi</div>
                                            <div className="col-span-2"> isi disposisi
                                                {this.props.DisposisiDetail.INFORMASI}
                                            </div>
                                            <div className="font-bold">Keterangan</div>
                                            <div className="col-span-2">
                                                {this.props.DisposisiDetail.PROSES_SELANJUTNYA}
                                            </div>
                                            <div></div>

                                            <div className="font-bold col-span-3">Informasi Surat yang Didisposisikan</div>
                                            
                                            <div className="font-bold">Nomor Agenda Surat</div>
                                            <div className="col-span-2"> 
                                                {this.props.DisposisiDetail.NOMOR_AGENDA}
                                                
                                            </div>

                                            <div className="font-bold">Dari</div>
                                            <div className="font-bold">Nama</div>
                                            <div className="">
                                                : {this.props.DisposisiDetail.NAMA_PENGIRIM}
                                            </div>
                                            <div></div>
                                            <div className="font-bold">Unit</div>
                                            <div className="">
                                                <ul>
                                                    {this.props.IdUnitKerja.map((item, index) => {
                                                        return (
                                                        <li key={index}>
                                                            {this.props.DisposisiDetail.ID_KODE_UNIT_KERJA ==
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
                                            <div></div>
                                            <div className="font-bold">Penandatangan</div>
                                            <div className="">
                                                : {this.props.DisposisiDetail.PENANDATANGAN}
                                            </div>
                                            
                                            <div className="font-bold">Tujuan</div>
                                            <div className="col-span-2">
                                                {this.props.DisposisiDetail.TUJUAN_SURAT}
                                            </div>

                                            <div className="font-bold">Nomor Surat</div>
                                            <div className="col-span-2"> 
                                                {this.props.DisposisiDetail.NOMOR_SURAT}
                                            </div>

                                            <div className="font-bold">Perihal / Ringkasan Surat</div>
                                            <div className="col-span-2">
                                                {this.props.DisposisiDetail.PERIHAL}
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
                        {/* )} */}
                    </>
                ):null}
            </>
        )
    }
}

// function mapStateToProps(state){
//     return state
// }

// export default connect(mapStateToProps.apply,{})(DetailDisposisi)
export default DetailDisposisi