import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'

const BoxDataReminder = ({ IdPengingat, IdPengguna, IdPencatatan, WaktuPengingat, Deskripsi, Status }) => {
  // const [formEdit, setFormEdit] = useState(false)
  return (
    <>
      <div className="grid grid-cols-3 gap-0 w-96 p-2 bg-white">
            <div className="flex items-start ml-1 font-semibold">
                Batas Waktu
            </div>
            <div className="col-span-2">
                : {WaktuPengingat}
            </div>
            <div className="flex items-start ml-1 font-semibold">
                Nomor Agenda
            </div>
            <div className="col-span-2">
                : {IdPencatatan}
            </div>
            <div className="flex items-start ml-1 font-semibold">
                Deskripsi
            </div>
            <div className="col-span-2">
                : {Deskripsi}
            </div>
            <div className="flex items-start ml-1 col-span-3 font-thin text-xs">
                {IdPengingat} hari lagi
            </div>
        </div>
    </>
  )
}
export default BoxDataReminder