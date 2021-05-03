import React from 'react'

const Box = ({ icon, title, url, onClick, setFeedback }) => {
  const onLink = () => {
    console.log('url : ')
    setFeedback()
  }
  return (
    <>
      {onClick ? (
        <button
          className="flex flex-row w-full  border border-black bg-brokenblack"
          onClick={onLink}
        >
          <div className="text-oren ml-2 mr-2 self-center	">
            <img className=" h-full w-4 " src="assets/img/icon.png" />
          </div>
          <div className="text-biru font-semibold	 text-110% self-center		">
            {title}
          </div>
        </button>
      ) : (
        <button
          className="flex flex-row w-full  border border-black"
          onClick={onLink}
        >
          <div className="text-oren ml-2 mr-2 self-center	">
            <img className=" h-full w-4 " src="assets/img/icon.png" />
          </div>
          <div className="text-oren font-semibold	 text-110% self-center		">
            {title}
          </div>
        </button>
      )}
    </>
  )
}
export default Box
