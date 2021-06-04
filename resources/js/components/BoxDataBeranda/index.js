import React, { Component } from 'react'
import { connect } from 'react-redux'
import {} from '../../actions'

class BoxDataBeranda extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {}
  }
  render() {
    return (
      //html
      //js
      <>
        {/* <div className="border-black border-2 w-13%">
          <div>
          </div>
          <div>
            
          </div>
        </div> */}

        <div className=" p-4 grid grid-rows-2 grid-flow-col gap-2 bg-white border-2 border-grey shadow-md ">
          <div className="flex  text-primary font-bold">
            <p className="text-4xl">{this.props.count}</p>
          </div>
          <div className=" font-bold">
            <div>{this.props.info}</div>
          </div>
          <div className="row-span-2 justify-center">
            <img className=" " src={'assets/img/icon/' + this.props.icon} />
          </div>
        </div>
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, {})(BoxDataBeranda)
