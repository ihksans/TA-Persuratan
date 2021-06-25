import axios from 'axios'
import api from '../../service/api'
import React, {Component, component, useState} from 'react'
import {connect} from 'react-redux'
import Kalender from '../AddFormSurat/Kalender'


class AddFormDisposisi extends Component{
    constructor(props){
        super(props)
        this.state={
            dir: [],
            tglSurat: this.props.SuratDetail.TGL_SURAT,
            tglDiterima: this.props.SuratDetail.TGL_DITERIMA,
        }
        this.handleModal = this.handleModal.bind(this)
    }
    handleModal(){
        this.setState({
            showModal: !this.state.showModal,
        })
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
                        (
                        <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
                            <div className="relative w-auto my-6 mx-auto max-w-6xl">
                                {/* content */}
                                <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
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
                                                {/* <div className="flex flex-row  col-span-3 mb-4 border-b-2">
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
                                                        
                                                        <button
                                                        type="submit"
                                                        className="bg-primary font-bold 	self-center ml-2 mt-1  rounded p-1 shadow-sm w-full"
                                                        >
                                                        Ekspor ke PDF
                                                        </button>
                                                        
                                                </div> */}
                                            <div className="font-bold col-span-3">Detail Surat</div>
                                            
                                            <div className="font-bold">Nomor Agenda</div>
                                            <div className="col-span-2">
                                                {this.props.SuratDetail.NOMOR_AGENDA}
                                            </div>

                                            <div className="font-bold">Dari</div>
                                            <div className="font-bold">Nama</div>
                                            <div className="">: KO
                                                : {this.props.SuratDetail.NAMA_PENGIRIM}
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
                                            <div></div>
                                            <div className="font-bold">Penandatangan</div>
                                            <div className="">
                                                : {this.props.SuratDetail.PENANDATANGAN}
                                            </div>
                                            
                                            <div className="font-bold">Tujuan</div>
                                            <div className="col-span-2">
                                                {this.props.SuratDetail.TUJUAN_SURAT}
                                            </div>

                                            <div className="font-bold">Nomor Surat</div>
                                            <div className="col-span-2">
                                                {this.props.SuratDetail.NOMOR_SURAT}
                                            </div>

                                            <div className="font-bold">Tanggal Surat</div>
                                            <div className="col-span-2">
                                                {this.state.tglSurat}
                                            </div>
                                            <div className="font-bold">Tanggal Terima</div>
                                            <div className="col-span-2">
                                                {this.state.tglDiterima}
                                            </div>

                                            <div className="font-bold">Perihal / Ringkasan</div>
                                            <div className="col-span-2">
                                                {this.props.SuratDetail.PERIHAL}
                                            </div>

                                            <div className="font-bold">Jenis Surat</div>
                                            <div className="col-span-2">
                                            {/* {this.props.AllJenisSurat.allJenisSurat.map(
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
                                            )} */}
                                            </div>

                                            <div className="font-bold">Kode Hal</div>
                                            <div className="col-span-2">
                                                {/* {this.props} */}
                                            </div>

                                            <div className="font-bold">Jenis Surat</div>
                                            <div className="col-span-2">
                                            
                                            </div>

                                            <div className="font-bold">Sifat Surat</div>
                                            <div className="col-span-2">
                                            {/* {this.props.RSifatSurat.allSifatSuratInfo.map(
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
                                            )} */}
                                            </div>

                                            <div className="font-bold">Derajar Surat</div>
                                            <div className="col-span-2">
                                            {/* {this.props.RDerajatSurat.allDerajatSuratInfo.map(
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
                                                    )}{' '} */}
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
                                            <div className="col-span-2"> - 
                                                {/* {this.props} */}
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
                                            <div className="flex flex-row items-start p-2 ml-6 border-solid border-blueGray-200 rounded-t col-span-3">
                                                <div>
                                                    <img 
                                                        className="w-8"
                                                        // src="assets/img/icon/Surat.png"
                                                    />
                                                </div>
                                                <div className="flex">
                                                    <h3 className="text-xl font-semibold">
                                                        
                                                    </h3>
                                                </div>
                                            </div>
                                            {/* <div className="font-bold col-span-3">Detail Surat</div> */}
                                            <div className="flex flex-row grid grid-cols-3 bg-white p-4">
                                                <div className="font-bold col-span-3">Data Disposisi</div>
                                                
                                                <form
                                                className="mt-8"
                                                action="#"
                                                method="POST"
                                                // onSubmit={this.onSubmit}
                                                >
                                                    {/* <div className="flex flex-row grid grid-cols-2"> */}
                                                        <div className="flex flex-row grid grid-cols-2">
                                                            <div
                                                                htmlFor="nama"
                                                                className="text-sm mb-2 font-bold flex flex-row "
                                                            >
                                                                <div>Nomor Disposisi </div>
                                                                <div className="text-danger ml-2"> </div>
                                                            </div>
                                                            <div className="justify-end ">
                                                                <div 
                                                                type=""
                                                                name="nomorDisposisi"
                                                                // required
                                                                id="nomorDisposisi"
                                                                className=""
                                                                >
                                                                {this.props.SuratDetail.NOMOR_SURAT}
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
                                                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                                                }
                                                                >
                                                                <Kalender
                                                                    onChange={(exDate, value) =>
                                                                    this.handleTglSurat(exDate, value)
                                                                    }
                                                                    data={null}
                                                                />
                                                                </div>
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
                                                                <div
                                                                type=""
                                                                name="tujuanDisposisi"
                                                                // required
                                                                id="tujuanDisposisi"
                                                                className=""
                                                                >
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
                                                                <input
                                                                type="text"
                                                                name="informasiDisposisi"
                                                                required
                                                                id="informasiDisposisi"
                                                                className={
                                                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                                                }
                                                                >
                                                                {/* {this.state.lastAgenda} */}
                                                                </input>
                                                            </div>
                                                        </div>
                                                        <div className="flex flex-row grid grid-cols-2">
                                                            <div
                                                                htmlFor="nama"
                                                                className="text-sm mb-2 font-bold flex flex-row "
                                                            >
                                                                <div>Keterangan / Proses Selanjutnya </div>
                                                                <div className="text-danger ml-2"> </div>
                                                            </div>
                                                            <div className="justify-end ">
                                                                <input
                                                                type="text"
                                                                name="keteranganDisposisi"
                                                                required
                                                                id="keteranganDisposisi"
                                                                className={
                                                                    'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                                                }
                                                                >
                                                                {/* {this.state.lastAgenda} */}
                                                                </input>
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
                                                                className=" w-1/2 p-1 border-2 rounded-md  bg-biru justify-center items-center"
                                                                onClick={this.onSubmit}
                                                                value="Add Pengguna"
                                                            >
                                                                Simpan
                                                            </button>
                                                        </div>
                                                    {/* </div> */}
                                                    
                                                    {/* <div 
                                                    className="font-bold text-sm mb-2 flex flex-row"
                                                    htmlFor="nama"
                                                    // className="text-sm mb-2 font-bold flex flex-row "
                                                    >Tanggal Disposisi</div>
                                                    <div className="col-span-2">
                                                        <input 
                                                        type="text"
                                                        name="tanggalDisposisi"
                                                        // required
                                                        id="tanggalDisposisi"
                                                        // className={'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	mr-4  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'}
                                                        >
                                                        
                                                        </input>
                                                    </div> */}
                                                </form>
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

// export default connect(mapStateToProps.apply,{})(AddFormDisposisi)
export default AddFormDisposisi