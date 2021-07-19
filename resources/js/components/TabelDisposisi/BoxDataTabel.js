// import React, { useState, Component } from 'react'
// import FormUserEdit from '../FormUserEdit'
// import ModalKonfirmDelete from '../ModalKonfirmDelete'
import DetailDisposisi from '../DetailDisposisi'
import AddFormDisposisi from '../AddFormDisposisi'
import React, { Component } from 'react'
import api from '../../service/api'

class BoxDataTabel extends Component{
    // const [formEdit, setFormEdit] = useState(false)
    constructor(props){
        super()
        this.state={
            suratMasuk:'',
            jenisSurat:'',

        }
    }
    render(){
    return (
    <>
    <div className="grid grid-cols-8 border-b-2 border-gray-400 p-2">
        {/* <div className="flex flex-row ml-4 mt-1 ">
            <div className="">{this.props.No}.</div>
        </div>
        <div className="flex flex-row mt-1">
            <div className="">{this.props.NomorAgenda}</div>
        </div> */}
        {/* <div className="flex flex-row  col-span-2 ml-2 mt-1">
            <div className="grid grid-cols-2 p-2">
                
                
            </div>
        </div> */}
        <div className="flex flex-row ml-2 ">
                    <div className="">{this.props.No}.</div>
                </div>
                <div className="flex flex-row">
                    <div className="">{this.props.NomorAgenda}</div>
                </div>


        <div className="flex flex-row mt-1">
            <div className="">{this.props.Tanggal}</div>
        </div>
        <div className="flex flex-row mt-1">
            {/* <ul>
                {this.props.IdSuratMasuk.map((item, index)=>{
                    return(
                        <li key={index}>
                            {this.props.suratMasuk == item.ID_PENCATATAN?(
                                <div className="ml-2">
                                    {item.NOMOR_SURAT.length > 15?(
                                        <>{item.NOMOR_SURAT.slice(0,15)}...</>
                                    ):(
                                        <>{item.NOMOR_SURAT}...</>
                                    )}
                                </div>
                            ):(
                                <></>
                            )}
                        </li>
                    )
                })}
            </ul> */}
            <div className="truncate">{this.props.NomorSurat}</div>
            {/* <div className="">12893712</div> */}
        </div>
        <div className="flex flex-row mt-1">
            <div className="truncate">{this.props.Informasi}</div>
        </div>
        <div className="flex flex-row ml-4 mt-1">
            {/* <div className="">{this.props.Tujuan}</div> */}
            <div className="">{this.props.TujuanSurat}</div>
        </div>
        <div className="flex flex-row mt-1">
            {/* <div className="">{this.props.Keterangan}</div> */}
            <div className="truncate">{this.props.ProsesSelanjutnya}</div>
        </div>

        {/* <div className="flex flex-row mt-1">
            {Role == 1 ? (
            <div className="">Administrator</div>
            ) : (
            <div className="">Staff Pengguna</div>
            )}
        </div> */}
        
        <div className="">
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

            <DetailDisposisi 
            DisposisiDetail={this.props.Disposisi}
            TujuanSurat={this.props.TujuanSurat}
            IdPencatatan={this.props.IdPencatatan}
            IdJenisSurat={this.props.IdJenisSurat}
            IdSuratMasuk={this.props.IdSuratMasuk}
            IdUnitKerja={this.props.IdUnitKerja}
            UnitKerja={this.props.UnitKerja}
            NomorSurat={this.props.NomorSurat}
            // console.log('pengguna:' + this.state.pengguna)
            />

            {/* NomorAgenda={this.props.NOMOR_AGENDA}
            /> */}
        </div>
    </div>
    </>
    )
    }
}
export default BoxDataTabel