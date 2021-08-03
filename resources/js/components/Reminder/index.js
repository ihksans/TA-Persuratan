import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'
import moment from 'moment'
import BoxDataReminder from '../Reminder/BoxDataReminder'

// const DataReminder = ({ Pengingat }) => {
class DataReminder extends Component {
  constructor(props) {
    super(props)
    this.state = {
      Pengingat: this.props.Pengingat,
      jP: this.props.jenisPengingat,
    }
  }
  render(){
    let rn = moment()
    let filteredPengingat = this.state.Pengingat.filter((obj)=>{
      if (obj.JENIS_PENGINGAT == this.state.jP){
        return obj.WAKTU_PENGINGAT >= rn.format("YYYY-MM-DD") && obj.STATUS == 1
      }      
    })
    console.log(rn.format("YYYY-MM-DD"))
    return (
      <>
        <ul>
          {filteredPengingat.map((item, index) => {
            {this.props}
            return (
              <li key={index}>
                <BoxDataReminder
                    IdPengingat={item.ID_PENGINGAT}
                    IdPengguna={item.ID_PENGGUNA}
                    IdPencatatan={item.ID_PENCATATAN}
                    WaktuPengingat={item.WAKTU_PENGINGAT}
                    Deskripsi={item.DESKRIPSI}
                    Status={item.STATUS}
                />
              </li>
            )
          })}
        </ul>
      </>
    )
  }
}
export default DataReminder