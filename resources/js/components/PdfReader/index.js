// import React from 'react'

// import { PDFReader } from 'reactjs-pdf-reader'
// const PdfReader = () => {
//   return (
//     <div style={{ overflow: 'scroll', height: 600 }}>
//       <PDFReader
//         url={{
//           url:
//             'https://firebasestorage.googleapis.com/v0/b/petanas-1efe5.appspot.com/o/Document%2F2.pdf?alt=media&token=c49ce22f-09c1-473d-b465-00a2e9269a60',
//           httpHeaders: {
//             'Access-Control-Allow-Origin': '*',
//             'Access-Control-Allow-Headers':
//               'Origin, X-Requested-With, Content-Type, Accept, Authorization',
//             'Access-Control-Allow-Methods': 'GET,HEAD,OPTIONS,POST,PUT',
//           },
//         }}
//         showAllPage={true}
//         isShowFooter={false}
//         isShowHeader={true}
//       />
//     </div>
//   )
// }

//export default PdfReader

import React, { useState } from 'react'
import { Document, Page, pdfjs } from 'react-pdf'
import './App.css'
import api from '../../service/api'
pdfjs.GlobalWorkerOptions.workerSrc = `//cdnjs.cloudflare.com/ajax/libs/pdf.js/${pdfjs.version}/pdf.worker.js`

const PdfReader = () => {
  const [numPages, setNumPages] = useState(null)
  const [pageNumber, setPageNumber] = useState(1)
  const [url, setUrl] = useState(null)
  function onDocumentLoadSuccess({ numPages }) {
    setNumPages(numPages)
  }
  const getData = () => {
    let formData = new FormData()
    formData.append('namafile', '17893-1-33923-1-10-20160115')

    api()
      .post('/api/getSurat', formData)
      .then((response) => setUrl(response))
    console.log('url file:' + url)
  }
  const downloadFile = () => {
    api().post('/api/saveSurat').then()
  }
  return (
    <div>
      <div input="button" className="b-2" onClick={getData}>
        {' '}
        get data
      </div>
      <div input="button" className="b-2" onClick={downloadFile}>
        {' '}
        download
      </div>
      <div className="flex justify-center items-center w-75% h-90%">
        <Document
          file={
            'https://storage.googleapis.com/petanas-1efe5.appspot.com/Document/Latihan%20Topic%206.pdf?GoogleAccessId=firebase-adminsdk-efoz1%40petanas-1efe5.iam.gserviceaccount.com&Expires=1623801600&Signature=UvxMFnZDUdaSlB%2FtY3ZbCPYUDGEnkF6GgGZbxxjbOUb%2FI4YA%2FQLiKw28JNE%2BqpjZYvq8%2Bo%2BF9DnY%2FdA%2BcP4A0dPpRXCNkDrwtbh6%2BcAytIVtrAnAs6w5nsvY5eAJyqgY5ggUiMTcc7nWJXKMuZLGeptLwVkRtWccUZikWpfnHcgbuGM2uYtW%2FKYP0Dkio5WoPTylfe%2B8TWha%2BpkYZGzhYwBOgwTrWsHfAudjtL93RGCT39iwlzo1jiFqazjynd5Otkr7wPqlkiP0IsiK10u4KeaS%2FrCIMuSBmr0mON2kY1EJ7ILduxufwxgyM36fypy%2BoGSVIWYJsIQ09byK7Ihehg%3D%3D'
          }
          // file={'/data_files.pdf'}
          onLoadSuccess={onDocumentLoadSuccess}
          onContextMenu={(e) => e.preventDefault()}
          className="pdf-container"
        >
          <Page pageNumber={pageNumber} />
          <p>
            Page {pageNumber} of {numPages}
          </p>
        </Document>
      </div>
    </div>
  )
}

export default PdfReader
