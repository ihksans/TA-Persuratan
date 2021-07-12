import React from 'react'
import api from '../../service/api'
import ModalLoading from '../ModalLoading'
export default function ModalKonfirmDeleteSM({
  IdSurat,
  NomorSurat,
  NamaSurat,
  NamaLampiran,
}) {
  const [showModal, setShowModal] = React.useState(false)
  const [showLoading, setLoading] = React.useState(false)
  const handleLoading = () => {
    setLoading(!showLoading)
  }
  const deletePengguna = async (id) => {
    handleLoading()
    let formData = new FormData()
    formData.append('id', id)
    console.log('id' + id)
    await api()
      .delete('api/delSuratMasuk/' + id)
      .then((response) => {
        console.log('respon:' + response)
        console.log('Surat telah terhapus')
      })
      .catch((error) => {
        console.log(error)
      })
    await api()
      .delete('api/delPencatatan/' + id)
      .then((response) => {
        console.log('respon:' + response)
        console.log('Pencatatan telah terhapus')
        if (NamaSurat == null && NamaLampiran == null) {
          handleLoading()
          setShowModal(false)
          window.location.reload('/#/SuratMasuk')
        }
      })
      .catch((error) => {
        console.log(error)
      })
    if (NamaSurat != null) {
      await api()
        .delete('api/delSurat/' + NamaSurat)
        .then((response) => {
          console.log('respon:' + response)
          console.log('File surat telah terhapus')
          if (NamaLampiran == null) {
            handleLoading()
            setShowModal(false)
            window.location.reload('/#/SuratMasuk')
          }
        })
        .catch((error) => {
          console.log(error)
        })
    }

    if (NamaLampiran != null) {
      await api()
        .delete('api/delSurat/' + NamaLampiran)
        .then((response) => {
          console.log('respon:' + response)
          console.log('File surat telah terhapus')
          handleLoading()
          setShowModal(false)
          window.location.reload('/#/SuratMasuk')
        })
        .catch((error) => {
          console.log(error)
        })
    }
  }
  return (
    <>
      <button
        className="flex flex-row justify-center bg-danger font-bold items-center ml-2 mt-1 rounded p-2 shadow-sm w-75% hover:bg-red-700 focus:outline-none"
        type="button"
        onClick={() => setShowModal(true)}
      >
        <div className="ml-1">
          <img
            className="h-auto align-middle"
            src="assets/img/icon/Trash.png"
          />
        </div>
        <div className="font-bold text-putih ml-1 mr-2">Hapus</div>
      </button>
      {showModal ? (
        <>
          <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
            <div className="relative w-2/5 mx-auto max-w-6xl">
              {/*content*/}
              <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                {/*header*/}

                {/* <div className="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t"> */}
                <div className=" items-start justify-center rounded-t">
                  <div className=" flex justify-center">
                    <img
                      className="justify-self-center w-20 mt-6"
                      src="assets/img/icon/Warning.png"
                    />
                  </div>
                  <div className="flex justify-center">
                    <h3 className="text-xl font-semibold mt-3">Konfirmasi</h3>
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
                  <p className="my-4 text-blueGray-500 text-md leading-relaxed text-center">
                    Anda ingin menghapus surat masuk dengan nomor
                  </p>
                  <div className="flex flex-row col-span-2 justify-center ">
                    <div className="font-semibold">{NomorSurat}</div>?
                  </div>
                </div>
                {/*footer*/}
                <div className="flex items-center justify-center p-6 rounded-b grid grid-cols-2">
                  <div className="flex items-center justify-center content-center">
                    <button
                      className="rounded bg-abu text-red-500 background-transparent font-bold w-36 px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all"
                      type="button"
                      onClick={() => setShowModal(false)}
                    >
                      Tidak
                    </button>
                  </div>
                  <div className="flex items-center justify-center content-center">
                    <button
                      type="submit"
                      className="rounded bg-danger text-putih background-transparent font-bold w-36 px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all hover:bg-red-700"
                      onClick={() => deletePengguna(IdSurat)}
                    >
                      Ya
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="opacity-25 fixed inset-0 z-40 bg-black"></div>
        </>
      ) : null}
      <ModalLoading loading={showLoading} title={'Sedang diproses sistem'} />
    </>
  )
}
