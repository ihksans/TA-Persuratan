import React, { Component } from 'react'

import { connect } from 'react-redux'
import BoxDataBeranda from '../../components/BoxDataBeranda'
import BoxUserIntro from '../../components/BoxUserIntro'
class DashboardAdmin extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {}
  }

  render() {
    // console.log("tokenq"+ this.props.authToken.token)
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200 p-4	">
          <BoxUserIntro />
          <div className=" flex flex-row "></div>

          <div className="grid grid-cols-3 gap-4 mt-10">
            <div>
              <BoxDataBeranda
                count={'12'}
                info={'Total Surat Masuk'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'12'}
                info={'Total Surat Keluar'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'12'}
                info={'Total Surat Disposisi'}
                icon={'Surat.png'}
              />
            </div>
            <div>
              <BoxDataBeranda
                count={'12'}
                info={'Total Seluruh Surat'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'12'}
                info={'Total Pengguna'}
                icon={'User.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'1.0.0'}
                info={'Versi Aplikasi'}
                icon={'Version.png'}
              />
            </div>
          </div>
        </div>
      </>
    )
  }
}
function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, null)(DashboardAdmin)
