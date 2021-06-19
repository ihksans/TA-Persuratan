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
import { Document, Page, pdfjs } from 'react-pdf/dist/esm/entry.webpack'
import api from '../../service/api'
import 'react-pdf/dist/esm/Page/AnnotationLayer.css'
import ReactLoading from 'react-loading'

pdfjs.GlobalWorkerOptions.workerSrc = `//cdnjs.cloudflare.com/ajax/libs/pdf.js/${pdfjs.version}/pdf.worker.js`

const PdfReader = ({ urlFile }) => {
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
  const Loading = () => {
    return (
      <div>
        <ReactLoading type="spin" color="white" height={150} width={150} />
      </div>
    )
  }

  return (
    <div>
      <div className="">
        <Document
          file={urlFile}
          // file={'/data_files.pdf'}
          onLoadSuccess={onDocumentLoadSuccess}
          noData={Loading}
          // width="350"
          className="pdf-container"
        >
          <Page height={600} pageNumber={pageNumber} />
        </Document>
      </div>
    </div>
  )
}

export default PdfReader
