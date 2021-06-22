import React, { Component } from 'react'
import api from '../../service/api'
import DetailSuratMasuk from '../DetailSuratMasuk'
class BoxDataTabel extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      jenisSurat: '',
    }
  }

  render() {
    return (
      <>
        <div className="grid grid-cols-9  border-b-2 border-gray-400 p-2">
          <div className="flex flex-row  col-span-2 ml-2 mt-1">
            <div className="grid grid-cols-3 p-2">
              <div className="flex flex-row ml-2 ">
                <div className="">{this.props.No}.</div>
              </div>

              <div className="   col-span-2 ">
                <div className="flex flex-row">
                  <div className="flex flex-row ml-4">
                    {this.props.TglSurat}
                  </div>
                  <div className="flex flex-row ml-4">
                    {this.props.TglDiterima}
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div className="flex flex-row  items-center ml-2 mt-1">
            <div className="">
              {this.props.NoSurat.length > 12 ? (
                <>{this.props.NoSurat.slice(0, 12)} ...</>
              ) : (
                <>{this.props.NoSurat}</>
              )}
            </div>
          </div>
          <div className="flex flex-row  col-span-2  items-center ml-2 mt-1">
            <div className="">
              {this.props.Perihal.length > 25 ? (
                <>{this.props.Perihal.slice(0, 25)}...</>
              ) : (
                <>{this.props.Perihal}</>
              )}
            </div>
          </div>
          <div className="flex flex-row  items-center ml-2 mt-1 ">
            <ul>
              {this.props.IdJenisSurat.map((item, index) => {
                return (
                  <li key={index}>
                    {this.props.JenisSurat == item.ID_JENIS_SURAT ? (
                      <div className="">
                        {item.JENIS_SURAT.length > 15 ? (
                          <>{item.JENIS_SURAT.slice(0, 15)}...</>
                        ) : (
                          <>{item.JENIS_SURAT}</>
                        )}
                      </div>
                    ) : (
                      <></>
                    )}
                  </li>
                )
              })}
            </ul>
          </div>
          <div className="flex flex-row items-center ml-2 mt-1">
            {/* <ul>
              {this.props.IdUnitKerja.map((item, index) => {
                return (
                  <li key={index}>
                    {this.props.UnitKerja == item.ID_KODE_UNIT_KERJA ? (
                      <div className="">
                        {item.NAMA_UNIT_KERJA.length > 15 ? (
                          <>{item.NAMA_UNIT_KERJA.slice(0, 15)}...</>
                        ) : (
                          <>{item.NAMA_UNIT_KERJA}</>
                        )}
                      </div>
                    ) : (
                      <></>
                    )}
                  </li>
                )
              })}
            </ul> */}
            {this.props.TujuanSurat}
          </div>
          <div className="   items-center ml-2 mt-1">
            <div className="font-bold">
              {this.props.NamaPengirim.length > 12 ? (
                <>{this.props.NamaPengirim.slice(0, 12)}...</>
              ) : (
                <>{this.props.NamaPengirim}</>
              )}
            </div>
            <ul>
              {this.props.IdUnitKerja.map((item, index) => {
                return (
                  <li key={index}>
                    {this.props.UnitKerja == item.ID_KODE_UNIT_KERJA ? (
                      <div className="">
                        {item.KODE_UNIT_KERJA.length > 15 ? (
                          <>{item.KODE_UNIT_KERJA.slice(0, 15)}...</>
                        ) : (
                          <>{item.KODE_UNIT_KERJA}</>
                        )}
                      </div>
                    ) : (
                      <></>
                    )}
                  </li>
                )
              })}
            </ul>
          </div>

          <DetailSuratMasuk
            namaFile={this.props.NamaFileSurat}
            SuratDetail={this.props.Surat}
            namaLampiran={this.props.NamaFileLampiran}
            jenisSurat={this.props.jenisSurat}
            IdUnitKerja={this.props.IdUnitKerja}
          />
        </div>
      </>
    )
  }
}
export default BoxDataTabel
