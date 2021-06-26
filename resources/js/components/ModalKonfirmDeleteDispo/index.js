import React from 'react'
import api from '../../service/api'
import ModalLoading from '../ModalLoading'
export default function ModalKonfirmDeleteDispo({}){
    const [showModal, setShowModal] = React.useState(false)
    const [showLoading, setLoading] = React.useState(false)
    const handleLoading = () => {
        setLoading(!showLoading)
    }
    const deleteDisposisi = async(id)=>{
        let formData = new FormData()
        formData.append('id',id)
        console.log('id'+id)
    }
    return (
        <>
            <button
            className="flex flex-row bg-danger font-bold items-center ml-2 mt-1  rounded p-2 shadow-sm w-75%"
            type="button"
            onClick={()=>setShowModal(true)}
            >
                <div className="ml-1">
                    <img
                        className="h-auto align-middle"
                        src="assets/img/icon/Trash.png"
                    />
                    </div>
                    <div className="font-bold text-putih ml-1 mr-2">Hapus</div>
            </button>

        </>
    )
}