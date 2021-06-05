import React from 'react'
import api from '../../service/api'
import ModalKonfirmDelete from '../ModalKonfirmDelete'

const BoxData = ({ IdPengguna, No, NamaPengguna, Username, Role, Aksi }) => {
  // const confirmDelete=(id)=>{
  //   const getAlert=()=>(
  //     <SweetAllert
  //     warning
  //     showCancel
  //     confirmBtnText="Hapus"
  //     cancelBtnText="Ga jadi"
  //     confirmBtnBsStyle="default"
  //     cancelBtnBsStyle="dager"
  //     onConfirm={() =>deletePengguna(IdPengguna)}
  //     onCancel={()=>this.hideAlert()}>
  //     </SweetAllert>
  //   );
  //   this.setState({
  //     alert: null
  //   })
  // }
  return (
    <>
      <div className="grid grid-cols-9 mt-4 border-b-2 border-black p-2">
        <div className="flex flex-row">
          <div className="">{No}.</div>
        </div>
        <div className="flex flex-row col-span-2">
          <div className="">{NamaPengguna}</div>
        </div>

        <div className="flex flex-row col-span-2">
          <div className="">{Username}</div>
        </div>

        <div className="">********</div>

        <div className="flex flex-row ">
          {Role == 1 ? (
            <div className="">Administrator</div>
          ) : (
            <div className="">Staff Pengguna</div>
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
            <div>
              <ModalKonfirmDelete 
              IdPengguna={IdPengguna}
              NamaPengguna={NamaPengguna}
              />
            </div>
              
          </div>
        </div>
      </div>
    </>
  )
}
export default BoxData
