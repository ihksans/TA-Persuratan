import React from 'react'
import api from '../../service/api'

const BoxData = ({ IdPengguna, No, NamaPengguna, Username, Role, Aksi }) => {
  const deletePengguna =(id)=>{
    // console.log('id:' + id)
    // console.log('id Pengguna:' + IdPengguna)
    let formData = new FormData()
    formData.append('id',id)
    api()
      // .delete('api/deleteUser'+formData)
      .delete('api/deleteUser/'+formData)
      .then(response=>{
        console.log('pengguna telah terhapus')
      }).catch((error)=>{
        console.log(error)
      })
      // .then(response=>{
      //   console.log('pengguna tidak terhapus'+response.data)
      // }).catch((error)=>{
      //   console.log(error)
      // })
      // console.log('id:' +id)
  }
  return (
    <>
      <div className="grid grid-cols-9 mt-4 border-b-2 border-black p-2">
        <div className="flex flex-row">
          <div className="font-bold">{No}.</div>
        </div>
        <div className="flex flex-row col-span-2">
          <div className="font-bold">{NamaPengguna}</div>
        </div>

        <div className="flex flex-row col-span-2">
          <div className="font-bold">{Username}</div>
        </div>

        <div className="font-bold">********</div>

        <div className="flex flex-row ">
          {Role == 1 ? (
            <div className="font-bold">Administrator</div>
          ) : (
            <div className="font-bold">Staff Pengguna</div>
          )}
        </div>
        <div className="col-span-2">
          <div className=" flex flex-row">
            {/* <div type="submit" className="ml-2 bg-primary flex flex-row ">
              <img className="" src="assets/img/icon/Pencil.png" />
              <div className="font-bold text-xs text-white	">Edit</div>
            </div> */}

            <button
              type="submit"
              className="ml-2 bg-primary flex flex-row w-20	 p-1 items-center	shadow-sm "
            >
              <img className="" src="assets/img/icon/Pencil.png" />
              <div className="font-bold text-xs text-white ml-2	">Edit</div>
            </button>
            <button
              type="submit"
              className="ml-2 bg-biru flex flex-row ml-2 w-20	 p-1 items-center	shadow-sm"
              onClick={() =>deletePengguna(IdPengguna)}
            >
              <img className="" src="assets/img/icon/Trash.png" />
              <div className="font-bold text-xs text-white ml-2	">Hapus</div>
            </button>
          </div>
        </div>
      </div>
    </>
  )
}
export default BoxData
