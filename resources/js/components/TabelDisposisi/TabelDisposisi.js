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
  JenisDisposisi,
  Pencatatan,
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
                    Disposisi={item}
                    IdJenisSurat={IdJenisSurat}
                    IdUnitKerja={IdUnitKerja}
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
// class TabelDisposisi extends Component{
//   constructor(props){
//     super(props)
//     this.state = {
//       suratMasuk : this.props.SuratMasuk,
//       pencatatan : this.props.Pencatatan,
//       Disposisi : this.props.Disposisi
//     }
//     // this.getDisposisi = this.getDisposisi.bind(this)
//   }
//   // getDisposisi(e){
//   //   this.setState({

//   //   })
//   // }
//   render(){
//     let DisposisiSM = this.props.Disposisi.filter(
//       (disposisi)=>{
//         return disposisi
//       }
//     )
//     return(
//       <>
//       <ul>
//         <HeaderTabel />
//         {DisposisiSM == null ? null : (
//           <>
//             {DisposisiSM.map((item, index) => {
//               return (
//                 <li key={index}>
//                   <BoxDataTabel
//                     No={index + 1}
//                     // NomorAgenda={item.NOMOR_AGENDA}
//                     // Tanggal={item.TANGGAL_DISPOSISI}
//                     // NomorSurat = {item.NOMOR_SURAT}
//                     // Informasi={item.INFORMASI}
//                     // Tujuan={item.TUJUAN}
//                     // Keterangan={item.KETERANGAN}
//                     // NomorSurat={item.NOMOR_SURAT}
//                     // TujuanSurat={item.TUJUAN_SURAT}
//                     // ProsesSelanjutnya={item.PROSES_SELANJUTNYA}
//                     Disposisi={item}
//                     // IdJenisSurat={IdJenisSurat}
//                     // IdUnitKerja={IdUnitKerja}
//                     // JenisDisposisi={JenisDisposisi}
//                     // UnitKerja={item.ID_KODE_UNIT_KERJA}
//                     // Pencatatan={Pencatatan}
//                     // SuratMasuk={SuratMasuk}
//                     Pencatatan={this.props.Pencatatan}
//                     SuratMasuk={this.props.SuratMasuk}
//                   />
//                 </li>
//               )
//             })}
//           </>
//         )}
//       </ul>
//     </>
//     )
//   }
// }
export default TabelDisposisi
