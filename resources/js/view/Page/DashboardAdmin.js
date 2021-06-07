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
        <div className="w-full h-5/6 bg-gray-200 p-4">
          <BoxUserIntro />
          {/* <div className=" flex flex-row "></div> */}
          <div className="grid grid-cols-3 gap-4 mt-3">
            <div>
              <BoxDataBeranda
                count={'12'}
                info={'TOTAL SURAT MASUK'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'8'}
                info={'TOTAL SURAT KELUAR'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'6'}
                info={'TOTAL DISPOSISI'}
                icon={'Surat.png'}
              />
            </div>
            <div>
              <BoxDataBeranda
                count={'26'}
                info={'TOTAL SURAT'}
                icon={'Surat.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'2'}
                info={'TOTAL PENGGUNA'}
                icon={'User.png'}
              />
            </div>
            <div className="">
              <BoxDataBeranda
                count={'1.0.0'}
                info={'VERSI APLIKASI'}
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
