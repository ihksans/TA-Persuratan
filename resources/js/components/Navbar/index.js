import React, { useState } from 'react'
import Box from './Box'
const Navbar = () => {
  const [Clik1, setClick1] = useState(true)
  const [Clik2, setClick2] = useState(false)
  const [Clik3, setClick3] = useState(false)
  const [Clik4, setClick4] = useState(false)

  const getFeedback1 = () => {
    setClick1(true)
    setClick2(false)
    setClick3(false)
    setClick4(false)
  }

  const getFeedback2 = () => {
    setClick1(false)
    setClick2(true)
    setClick3(false)
    setClick4(false)
  }
  const getFeedback3 = () => {
    setClick1(false)
    setClick2(false)
    setClick3(true)

    setClick4(false)
  }
  const getFeedback4 = () => {
    setClick1(false)
    setClick2(false)
    setClick3(false)
    setClick4(true)
  }

  return (
    <>
      <div className="flex flex-col w-13% border border-black h-screen			">
        <div>
          <Box
            title={'Beranda'}
            onClick={Clik1}
            setFeedback={() => getFeedback1()}
          />
        </div>
        <div>
          <Box
            title={'Surat Masuk'}
            onClick={Clik2}
            setFeedback={() => getFeedback2()}
          />
        </div>
        <div>
          <Box
            title={'Surat Keluar'}
            onClick={Clik3}
            setFeedback={() => getFeedback3()}
          />
        </div>
        <div>
          <Box
            title={'Disposisi'}
            onClick={Clik4}
            setFeedback={() => getFeedback4()}
          />
        </div>
      </div>
    </>
  )
}

export default Navbar
