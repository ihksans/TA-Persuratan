import React, { Component } from 'react'
//ini buat ngekoneksi redux
import { connect } from 'react-redux'
import AddFormDisposisi from './index'
import {} from '../../actions'
import api from '../../service/api'
import ModalLoading from '../ModalLoading'
class ClassReducers extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      modal: false,
      disposisi: null,
      detailDisposisi: null,
      loading: false,
      url: null,
    }
    this.handleModal = this.handleModal.bind(this)
    this.getDisposisi = this.getDisposisi.bind(this)
    this.handleLoading = this.handleLoading.bind(this)
  }
  async handleModal() {
    await this.getDisposisi()
    await this.setState({
      modal: !this.state.modal,
    })
    if (this.state.modal == false) {
      await this.setState({
        modal: !this.state.modal,
      })
    }

    console.log('modal:' + this.state.modal)
  }
  handleLoading() {
    this.setState({
      loading: !this.state.loading,
    })
  }
  async getDisposisi() {
    this.handleLoading()
    await api()
      .get('api/getDisposisiByID/' + this.props.SuratDetail.ID_PENCATATAN)
      .then((response) => {
        if (response.data.content != null) {
          this.setState({
            disposisi: response.data.content,
          })
        } else {
          this.setState({
            disposisi: null,
          })
        }
      })
    if (this.state.disposisi != null) {
      let formData = new FormData()
      formData.append(
        'namafile',
        this.props.SuratDetail.NOMOR_SURAT + '_disposisi',
      )
      await api()
        .post('/api/getSurat', formData)
        .then((response) =>
          this.setState({
            url: response.data.url,
          }),
        )
    }
    this.handleLoading()
  }

  render() {
    return (
      <>
        <button
          className="flex flex-row bg-primary font-bold items-center ml-2 mt-1  rounded p-2 shadow-sm w-75%"
          type="button"
          onClick={this.handleModal}
        >
          <div className="ml-1">
            <img className="h-4 align-middle" src="assets/img/icon/Surat.png" />
          </div>
          <div className="font-bold text-putih ml-1 mr-2">Lihat Disposisi</div>
        </button>

        {this.state.modal ? (
          <>
            <AddFormDisposisi
              showModal={true}
              namaFile={this.props.NamaFileSurat}
              SuratDetail={this.props.SuratDetail}
              namaLampiran={this.props.NamaFileLampiran}
              jenisSurat={this.props.jenisSurat}
              IdUnitKerja={this.props.IdUnitKerja}
              disposisi={this.state.disposisi}
              url={this.state.url}
            />
          </>
        ) : null}
        {this.state.loading ? (
          <ModalLoading loading={this.state.loading} title={'Memeriksa data'} />
        ) : null}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, {
  //nama methodnya apa
})(ClassReducers)
