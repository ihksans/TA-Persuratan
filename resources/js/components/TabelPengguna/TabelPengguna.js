import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'
import HeaderTabel from './HeaderTabel'
import BoxData from './BoxDataTabel'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

const TabelPengguna = ({ Pengguna }) => {
  return (
    <>
      <ul>
        <HeaderTabel />
        {Pengguna.map((item, index) => {
          return (
            <li key={index}>
              <BoxData
                No={index + 1}
                NamaPengguna={item.NAMA}
                Username={item.USERNAME}
                Role={item.ROLE}
              />
            </li>
          )
        })}
      </ul>
    </>
  )
}
export default TabelPengguna
