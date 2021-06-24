import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'
import HeaderTabel from './HeaderTabel'
import BoxDataTabel from './BoxDataTabel'

const TabelDisposisi = ({Disposisi }) => {
    return(
        <>
            <ul>
                <HeaderTabel />
                {Disposisi.map((item,index)=>{
                    return(
                        <li key={index}>
                            <BoxDataTabel
                                No={index + 1}
                                NomorAgenda = {item.NOMOR_AGENDA}
                                Tanggal = {item.TANGGAL_DISPOSISI}
                                // NomorSurat = {item.NOMOR_SURAT}
                                Informasi = {item.INFORMASI}
                                Tujuan = {item.TUJUAN}
                                Keterangan = {item.KETERANGAN}
                            />
                        </li>
                    )
                })}
            </ul>
        </>
    )
}
export default TabelDisposisi