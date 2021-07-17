import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'
import HeaderTabel from './HeaderTabel'
import BoxDataTabel from './BoxDataTabel'

const TabelDisposisi = ({
  Disposisi,
  SuratMasuk,
  IdJenisSurat,
  IdUnitKerja,
}) => {
  return (
    <>
      <ul>
        <HeaderTabel />
        {Disposisi == null ? null : (
          <>
            {Disposisi.map((item, index) => {
              return (
                <li key={index}>
                  <BoxDataTabel
                    No={index + 1}
                    NomorAgenda={item.NOMOR_AGENDA}
                    Tanggal={item.TANGGAL_DISPOSISI}
                    // NomorSurat = {item.NOMOR_SURAT}
                    Informasi={item.INFORMASI}
                    Tujuan={item.TUJUAN}
                    Keterangan={item.KETERANGAN}
                    NomorSurat={item.NOMOR_SURAT}
                    TujuanSurat={item.TUJUAN_SURAT}
                    ProsesSelanjutnya={item.PROSES_SELANJUTNYA}
                    Disposisi={item}
                    IdSuratMasuk={SuratMasuk}
                    IdJenisSurat={IdJenisSurat}
                    IdUnitKerja={IdUnitKerja}
                    UnitKerja={item.ID_KODE_UNIT_KERJA}
                  />
                </li>
              )
            })}
          </>
        )}
      </ul>
    </>
  )
}
export default TabelDisposisi
