import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'
import BoxDataReminder from '../Reminder/BoxDataReminder'

const DataReminder = ({ Pengingat }) => {
    return (
      <>
        <ul>
          {Pengingat.map((item, index) => {
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
export default DataReminder