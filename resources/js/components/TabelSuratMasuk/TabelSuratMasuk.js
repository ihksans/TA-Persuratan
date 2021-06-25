import React, { Component } from 'react'
//ini buat ngekoneksi redux
import { connect } from 'react-redux'
import {} from '../../actions'
import HeaderTabel from './HeaderTabel'
import BoxData from './BoxDataTabel'

const TabelSuratMasuk = ({ SuratMasuk, IdJenisSurat, IdUnitKerja }) => {
  return (
    <>
      <ul>
        <HeaderTabel />
        {SuratMasuk.map((item, index) => {
          return (
            <li key={index}>
              <BoxData
                IdSuratMasuk={item.ID_PENCATATAN}
                No={index + 1}
                TglSurat={item.TGL_SURAT}
                TglDiterima={item.TGL_DITERIMA}
                NoSurat={item.NOMOR_SURAT}
                Perihal={item.PERIHAL}
                JenisSurat={item.ID_JENIS_SURAT}
                TujuanSurat={item.TUJUAN_SURAT}
                NamaPengirim={item.NAMA_PENGIRIM}
                UnitPengirim={item.UNIT_PENGIRIM}
                IdJenisSurat={IdJenisSurat}
                NamaFileSurat={item.NAMA_FILE_SURAT}
                NamaFileLampiran={item.NAMA_FILE_LAMPIRAN}
                Surat={item}
                IdUnitKerja={IdUnitKerja}
                UnitKerja={item.ID_KODE_UNIT_KERJA}
              />
            </li>
          )
        })}
      </ul>
    </>
  )
}
export default TabelSuratMasuk
