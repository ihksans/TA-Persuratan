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
            'https://storage.googleapis.com/petanas-1efe5.appspot.com/Document/Latihan%20Topic%206.pdf?GoogleAccessId=firebase-adminsdk-efoz1%40petanas-1efe5.iam.gserviceaccount.com&Expires=1623715200&Signature=uk5JYtSVmfCjTFrTYiWo%2BsomVEeyEW9%2B2fk%2BJR7BEAS0yiY6i%2FjpihkbzgYx28UHzaXh1VAUqVPZxZp9%2BEzjkKcaCGwMiiZt8Fdu6MU2F4jsdFKgWNvd42kPz1jOtpPMgvkW434mvsIlLMtrY7z8QDFA1WYOtu4OrTNp28p%2FQzPT1Vqu%2BBrHECXJhNfE0yM3XpjQdUxbw9AnHyQy9f30Z7ZggF3F8v6K%2BM6%2BErJLLhOpNN371tH72Uw%2Fs4eFQ6ZqMiu28DOXXgCrU8FQ%2BpnTmzrZnXnH%2BHCJyty7e4%2FyCEyper5D%2BYrcHYy3RK3uSZRSIxKOyhkl61P4Iof9znomNg%3D%3D'
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
