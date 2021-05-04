//this component for header
import React from 'react'

const HeaderComponent = () => {
  return (
    <>
      <div className="grid grid-cols-3 gap-4  h-5% border border-gray-400">
        <div className="col-span-2 flex justify-start">
          <div className="border-1 border-gray-400">=</div>
          <div className="border-1 border-gray-400  font-semibold">
            NAMAAPLIKASI
          </div>
        </div>
        <div className="flex justify-end border-1 border-gray-400">
          <div className="border-1 border-gray-400 ">
            <div className="border-1 border-gray-400  font-semibold">
              Satria Nata
            </div>
            <div className="border-1 border-gray-400 text-sm ">
              Administrator
            </div>
          </div>

          <div className="border-1 border-gray-400">Foto</div>
          <div className="border-1 border-gray-400">Surat</div>
          <div className="border-1 border-gray-400">Bel</div>
        </div>
      </div>
    </>
  )
}
export default HeaderComponent
