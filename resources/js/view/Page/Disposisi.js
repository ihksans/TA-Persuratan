import React, { Component } from 'react'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import TabelDisposisi from '../../components/TabelDisposisi/TabelDisposisi'
import PdfReader from '../../components/PdfReader'
import { connect } from 'react-redux'
import { setAllDisposisi } from '../../actions/index'
// import Index from '../../components/Disposisi/index'
import api from '../../service/api'
import AddFormDisposisi from '../../components/AddFormDisposisi/index'
class Disposisi extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      Disposisi:[],
    }
    this.getDisposisi = this.getDisposisi.bind(this)
  }

  async getDisposisi(){
    await api()
    .get('api/allInfoDisposisi')
    .then((response)=>{
      this.props.setAllDisposisi(response.data)
      console.log('Disposisi:' + this.props.AllDisposisi.allDisposisiInfo)
    })
  }

  componentDidMount(){
    this.getDisposisi()
  }
  render() {
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200 p-4	">
          <div className="bg-white shadow-md rounded p-6">
            <div className="flex flex-row">
              <div>
                <img className="w-8" src="assets/img/icon/Surat.png" />
              </div>
              <div className="font-bold ml-2 text-2xl	">Agenda Disposisi</div>
            </div>
            {/* <AddFormSurat /> */}
            <div>
            <AddFormDisposisi />
            </div>
            <div>
              
              {/* <TabelDisposisi Disposisi={this.state.Disposisi}/> */}

              {this.props.AllDisposisi.allDisposisiInfo == null ?(
                <TabelDisposisi Disposisi={this.state.Disposisi}/>
              ):(
                <TabelDisposisi Disposisi={this.props.AllDisposisi.allDisposisiInfo} />
              )}
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
export default connect(mapStateToProps,{setAllDisposisi})(Disposisi)
