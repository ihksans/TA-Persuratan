import React, { useState } from 'react'
import Box from './Box'
const Navbar = () => {
  const [Clik1, setClick1] = useState(true)
  const [Clik2, setClick2] = useState(false)
  const [Clik3, setClick3] = useState(false)
  const [Clik4, setClick4] = useState(false)

  const [admin, setAdmin] = useState(true)

  const [link, setLink] = useState('')

  const getFeedback = (temp) => {
    console.log('link:' + temp)
    if (temp == '') {
      setClick1(true)
      setClick2(false)
      setClick3(false)

      console.log('click 1:' + Clik1)
      console.log('click 2:' + Clik2)
      console.log('click 3:' + Clik3)
    }
    if (temp == 'KelolaSurat') {
      setClick2(true)
      setClick3(false)
      setClick1(false)

      console.log('click 1:' + Clik1)
      console.log('click 2:' + Clik2)
      console.log('click 3:' + Clik3)
    }
    if (temp == 'KelolaPengguna') {
      setClick3(true)
      setClick1(false)
      setClick2(false)

      console.log('click 1:' + Clik1)
      console.log('click 2:' + Clik2)
      console.log('click 3:' + Clik3)
    }
  }
  return (
    <>
      <div className="flex flex-col w-13% border border-black h-screen">
        {!admin ? (
          <>
            {' '}
            <div>
              <Box
                title={'Beranda'}
                url={''}
                onClick={Clik1}
                setFeedback={() => getFeedback()}
              />
            </div>
            <div>
              <Box
                title={'Surat Masuk'}
                onClick={Clik2}
                setFeedback={() => getFeedback()}
              />
            </div>
            <div>
              <Box
                title={'Surat Keluar'}
                onClick={Clik3}
                setFeedback={() => getFeedback()}
              />
            </div>
            <div>
              <Box
                title={'Disposisi'}
                onClick={Clik4}
                setFeedback={() => getFeedback()}
              />
            </div>
          </>
        ) : (
          <>
            <div>
              <Box
                title={'Beranda'}
                url={''}
                onClick={Clik1}
                setFeedback={(temp) => getFeedback(temp)}
              />
            </div>
            <div>
              <Box
                title={'Kelola Surat'}
                url={'KelolaSurat'}
                onClick={Clik2}
                setFeedback={(temp) => getFeedback(temp)}
              />
            </div>
            <div>
              <Box
                title={'Kelola Pengguna'}
                url={'KelolaPengguna'}
                onClick={Clik3}
                setFeedback={(temp) => getFeedback(temp)}
              />
            </div>
          </>
        )}
      </div>
    </>
  )
}

export default Navbar
