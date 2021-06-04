//this component for footer
import React from 'react'

const Footer = () => {
  return (
    <>
      {/* <div className="flex flex-wrap content-end border border-gray-400 h-5% ">
        <div className="ml-4 text-sm	text-center mt-6">
          Copyright @2021 NamaAplikasi. All rights reserved
        </div>
      </div> */}

      <div className="grid grid-cols-3 gap-4  h-5% border border-gray-400 flex items-center list-none">
        <div className="col-span-2 flex justify-start">
          <div className="flex items-center list-none			">
            <div className="text-sm	flex items-center mr-4 ml-4 ">
              Copyright @2021 NamaAplikasi. All rights reserved
            </div>
          </div>
        </div>
        <div className="flex  items-center justify-end border-1 border-gray-400">
          <div className="flex items-center list-none			">
            <div className="text-sm	flex items-center mr-4 ">Versi 1.0</div>
          </div>
        </div>
      </div>
    </>
  )
}
export default Footer
