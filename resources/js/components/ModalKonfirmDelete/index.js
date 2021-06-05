import React from 'react'
import api from '../../service/api'

export default function ModalKonfirmDelete({ IdPengguna, NamaPengguna }) {
  const [showModal, setShowModal] = React.useState(false)
  const deletePengguna = (id) => {
    console.log('id:' + id)
    console.log('id Pengguna:' + IdPengguna)
    let formData = new FormData()
    formData.append('id', id)
    api()
      // .delete('api/deleteUser'+formData)
      .delete('api/deleteUser/' + id)
      .then((response) => {
        console.log('respon:' + response)
        console.log('pengguna telah terhapus')
        setShowModal(false)
      })
      .catch((error) => {
        console.log(error)
      })
  }
  return (
    <>
      <button
        className="ml-2 bg-biru flex flex-row ml-2 w-20	 p-1 items-center	shadow-sm"
        type="button"
        onClick={() => setShowModal(true)}
      >
        <img className="" src="assets/img/icon/Trash.png" />
        <div className="font-bold text-xs text-white ml-2	">Hapus</div>
      </button>
      {showModal ? (
        <>
          <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
            <div className="relative w-auto my-6 mx-auto max-w-sm">
              {/*content*/}
              <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                {/*header*/}

                {/* <div className="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t"> */}
                <div className=" items-start justify-center p-5 border-b border-solid border-blueGray-200 rounded-t">
                  <div className=" flex justify-center">
                    <img
                      className="justify-self-center"
                      src="assets/img/icon/Warning.png"
                    />
                  </div>
                  <div className="flex justify-center">
                    <h3 className="text-3xl font-semibold  ">Konfirmasi</h3>
                  </div>
                  {/* </div> */}
                  <button
                    className="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                    onClick={() => setShowModal(false)}
                  >
                    <span className="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                      ×
                    </span>
                  </button>
                </div>
                {/*body*/}
                <div className="relative p-6 flex-auto justify-center">
                  <p className="my-4 text-blueGray-500 text-lg leading-relaxed ">
                    Anda ingin menghapus pengguna dengan nama
                  </p>
                  <div className="flex flex-row col-span-2 justify-center font-semibold">
                    <div className="">{NamaPengguna}</div>
                  </div>
                </div>
                {/*footer*/}
                <div className="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                  <button
                    className="rounded bg-abu text-red-500 background-transparent font-bold px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all"
                    type="button"
                    onClick={() => setShowModal(false)}
                  >
                    Tidak
                  </button>
                  <button
                    type="submit"
                    className="rounded bg-danger text-red-500 background-transparent font-bold px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all"
                    onClick={() => deletePengguna(IdPengguna)}
                  >
                    Ya
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div className="opacity-25 fixed inset-0 z-40 bg-black"></div>
        </>
      ) : null}
    </>
  )
}
