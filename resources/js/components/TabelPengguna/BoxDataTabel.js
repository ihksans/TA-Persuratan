import React from 'react'

const BoxData = ({ No, NamaPengguna, Username, Role, Aksi }) => {
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
