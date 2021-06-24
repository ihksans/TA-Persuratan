// import React, { useState, Component } from 'react'
// import FormUserEdit from '../FormUserEdit'
// import ModalKonfirmDelete from '../ModalKonfirmDelete'
import DetailDisposisi from '../DetailDisposisi/index'
import React, { Component } from 'react'

// const BoxData = ({ No, NamaPengguna, Username, Role, Id, IdPengguna }) => {
// const BoxDataTabel = ({ No, NomorAgenda, Tanggal, NomorSurat, Informasi, Tujuan, Keterangan }) => {
//     const [formEdit, setFormEdit] = useState(false)
//     return (
//     <>
//     <div className="grid grid-cols-9 border-b-2 border-gray-400 p-2">
//         <div className="flex flex-row ml-2 mt-1">
//             <div className="">{No}.</div>
//         </div>
//         <div className="flex flex-row col-span-2 mt-1">
//             <div className="">{NomorAgenda}</div>
//         </div>

//         <div className="flex flex-row col-span-2 mt-1">
//             <div className="">{Tanggal}</div>
//         </div>
//         {/* <div className="flex flex-row col-span-2 mt-1">
//             <div className="">{NomorSurat}</div>
//         </div> */}
//         <div className="flex flex-row col-span-2 mt-1">
//             <div className="">{Informasi}</div>
//         </div>
//         <div className="flex flex-row col-span-2 mt-1">
//             <div className="">{Tujuan}</div>
//         </div>
//         <div className="flex flex-row col-span-2 mt-1">
//             <div className="">{Keterangan}</div>
//         </div>

//         {/* <div className="flex flex-row mt-1">
//             {Role == 1 ? (
//             <div className="">Administrator</div>
//             ) : (
//             <div className="">Staff Pengguna</div>
//             )}
//         </div> */}
//         <div className="col-span-2">
//             <div className=" flex flex-row">
//             <div
//                 type="submit"
//                 className="bg-primary flex flex-row rounded p-1 items-center shadow-sm"
//             >
//                 {/* <LihatDetailDisposisi /> */}
//             {/* <FormUserEdit
//                 nama={NamaPengguna}
//                 username={Username}
//                 role={Role}
//                 id={Id}
//             />
//             </div>
//             <div className="rounded">
//             <ModalKonfirmDelete
//                 IdPengguna={IdPengguna}
//                 NamaPengguna={NamaPengguna}
//               /> */}
//             </div>
//             </div>
//         </div>
//         {/* <DetailDisposisi /> */}
//     </div>
//     </>
//     )
// }
// export default BoxDataTabel

// const BoxDataTabel = ({ No, NomorAgenda, Tanggal, NomorSurat, Informasi, Tujuan, Keterangan }) => {
class BoxDataTabel extends Component{
    // const [formEdit, setFormEdit] = useState(false)
    constructor(props){
        super()
        this.state={}
    }
    render(){
    return (
    <>
    <div className="grid grid-cols-8 border-b-2 border-gray-400 p-2">
        {/* <div className="flex flex-row ml-4 mt-1 ">
            <div className="">{this.props.No}.</div>
        </div>
        <div className="flex flex-row mt-1">
            <div className="">{this.props.NomorAgenda}</div>
        </div> */}
        <div className="flex flex-row  col-span-2 ml-2 mt-1">
            <div className="grid grid-cols-2 p-2">
                <div className="flex flex-row ml-2 ">
                    <div className="">{this.props.No}.</div>
                </div>
                <div className="flex flex-row ml-2 ">
                    <div className="">{this.props.NomorAgenda}</div>
                </div>
            </div>
        </div>
        <div className="flex flex-row ml-8 mt-1">
            <div className="">{this.props.Tanggal}</div>
        </div>
        <div className="flex flex-row ml-12 mt-1">
            {/* <div className="">{this.props.NomorSurat}</div> */}
            <div className="">12893712</div>
        </div>
        <div className="flex flex-row ml-16  mt-1">
            <div className="">{this.props.Informasi}</div>
        </div>
        <div className="flex flex-row ml-8 mt-1">
            {/* <div className="">{this.props.Tujuan}</div> */}
            <div className="">pd3</div>
        </div>
        <div className="flex flex-row ml-8 mt-1">
            {/* <div className="">{this.props.Keterangan}</div> */}
            <div className="">tebusan</div>
        </div>

        {/* <div className="flex flex-row mt-1">
            {Role == 1 ? (
            <div className="">Administrator</div>
            ) : (
            <div className="">Staff Pengguna</div>
            )}
        </div> */}
        <div className="">
            <DetailDisposisi />
        </div>
    </div>
    </>
    )
    }
}
export default BoxDataTabel