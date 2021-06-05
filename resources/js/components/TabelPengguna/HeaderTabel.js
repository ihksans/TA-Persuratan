import React from 'react'

const HeaderTabel = () => {
  //contoh variabel
  const a = 'Bismillah'

  //contoh method
  const methodA = () => {}

  return (
    <>
      <div className="grid grid-cols-9 mt-4 border-b-2 border-black">
        <div className="flex flex-row">
          <div className="font-bold">No</div>
          <div>
            <button type="submit" className="ml-2">
              <img className="" src="assets/img/icon/Sort.png" />
            </button>
          </div>
        </div>
        <div className="flex flex-row col-span-2">
          <div className="font-bold">Nama Pengguna</div>
          <div>
            <button type="submit" className="ml-2">
              <img className="" src="assets/img/icon/Sort-2.png" />
            </button>
          </div>
        </div>

        <div className="flex flex-row col-span-2">
          <div className="font-bold">Username</div>
          <div>
            <button type="submit" className="ml-2">
              <img className="" src="assets/img/icon/Sort-2.png" />
            </button>
          </div>
        </div>

        <div className="font-bold">Password</div>

        <div className="flex flex-row ">
          <div className="font-bold">Role</div>
          <div>
            <button type="submit" className="ml-2">
              <img className="" src="assets/img/icon/Sort-2.png" />
            </button>
          </div>
        </div>
        <div className="font-bold col-span-2">Aksi</div>
      </div>
    </>
  )
}
export default HeaderTabel
