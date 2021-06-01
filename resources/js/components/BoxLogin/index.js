import React from 'react'
import Login from '../Login'
const Box = () => {
  return (
    <>
      {/* <div class="my-20 max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
 <img class="h-48 w-full object-cover md:w-48" src="assets/img/gdH.jpg" alt="Man looking at item at a store"/>
 
  <div class="md:flex">
    <div class="md:flex-shrink-0">
    
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
      <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
    </div>
  </div>
 
</div> */}
      <div className="flex flex-row self-center box-border  h-5/6 w-65%  border-4 shadow-2xl rounded-xl bg-white	">
        <div className="box-border  h-full w-2/4">
          <img
            className=" h-full w-full object-cover rounded-xl"
            src="assets/img/gdH.jpg"
          />
          {/* <div className="text-xs	text-center mt-6">
            Aplikasi pengelolaan persuratan
          </div>
          <div className="text-xs	text-center mt-6">Kemahasiswaan Polban</div> */}
        </div>
        <div className="box-border py-32 px-16 h-full w-2/4 ">
          <div className="text-110%	text-center mb-8 font-semibold">
            Nama Aplikasi
          </div>
          <div className="text-sm font-semibold text-opacity-50">
            Silahkan login untuk masuk ke dalam aplikasi
          </div>
          <Login />
          <div className="text-50%	text-center mt-6">
            Copyright @2021 NamaAplikasi. All rights reserved
          </div>
        </div>
      </div>
      <></>
    </>
  )
}
export default Box
