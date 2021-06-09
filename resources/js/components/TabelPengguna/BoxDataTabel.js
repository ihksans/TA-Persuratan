import React, { useState } from 'react'
import FormUserEdit from '../FormUserEdit'
import ModalKonfirmDelete from '../ModalKonfirmDelete'

const BoxData = ({ No, NamaPengguna, Username, Role, Id, IdPengguna }) => {
  const [formEdit, setFormEdit] = useState(false)
  return (
    <>
      <div className="grid grid-cols-9 border-b-2 border-gray-400 p-2">
        <div className="flex flex-row ml-2 mt-1">
          <div className="">{No}.</div>
        </div>
        <div className="flex flex-row col-span-2 mt-1">
          <div className="">{NamaPengguna}</div>
        </div>

        <div className="flex flex-row col-span-2 mt-1">
          <div className="">{Username}</div>
        </div>

        <div className="mt-1">●●●●●●●●●</div>

        <div className="flex flex-row mt-1">
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
              className="bg-primary flex flex-row rounded p-1 items-center shadow-sm"
            >
              <FormUserEdit
                nama={NamaPengguna}
                username={Username}
                role={Role}
                id={Id}
              />
            </div>
            <div className="rounded">
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
