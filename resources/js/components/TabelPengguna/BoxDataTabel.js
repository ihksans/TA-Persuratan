import React, { useState } from 'react'
import FormUserEdit from '../FormUserEdit'

const BoxData = ({ No, NamaPengguna, Username, Role, Id }) => {
  const [formEdit, setFormEdit] = useState(false)
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
            <div
              type="submit"
              className="ml-2 bg-primary flex flex-row w-20	 p-1 items-center	shadow-sm "
            >
              <FormUserEdit
                nama={NamaPengguna}
                username={Username}
                role={Role}
                id={Id}
              />
            </div>
            <button
              type="submit"
              className="ml-2 bg-biru flex flex-row ml-2 w-20	 p-1 items-center	shadow-sm"
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
