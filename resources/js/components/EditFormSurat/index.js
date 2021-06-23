import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
import Kalender from './Kalender'
import ModalLoading from '../ModalLoading'

// import createuser from "./index";
class EditFormSurat extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir: [],
      jenisSurat: [],
      modalLoading: false,

      firstDate: new Date(),
      surat: null,
      lampiran: null,
      showModal: false,
      idPencatatan: this.props.SuratDetail.ID_PENCATATAN,
      idPengguna: this.props.SuratDetail.ID_PENGGUNA,
      idJenisSurat: this.props.SuratDetail.ID_JENIS_SURAT,
      kodeArsipKom: this.props.SuratDetail.KODE_ARSIP_KOM,
      kodeArsipHlm: this.props.SuratDetail.KODE_ARSIP_HLM,
      kodeArsipManual: this.props.SuratDetail.KODE_ARSIP_MANUAL,
      namaFileSurat: this.props.SuratDetail.NAMA_FILE_SURAT,
      namaFileLampiran: this.props.SuratDetail.NAMA_FILE_LAMPIRAN,
      derajatSurat: this.props.SuratDetail.ID_DERAJAT_SURAT,
      nomorSurat: this.props.SuratDetail.NOMOR_SURAT,
      unitPengirim: this.props.SuratDetail.ID_KODE_UNIT_KERJA,
      penandatangan: this.props.SuratDetail.PENANDATANGAN,
      namaPengirim: this.props.SuratDetail.NAMA_PENGIRIM,
      tujuanSurat: this.props.SuratDetail.TUJUAN_SURAT,
      perihal: this.props.SuratDetail.PERIHAL,
      tglDiterima: this.props.SuratDetail.TGL_DITERIMA,
      tglSurat: this.props.SuratDetail.TGL_SURAT,
      sifatNaskah: this.props.SuratDetail.ID_SIFAT_NASKAH,
      lastAgenda: this.props.SuratDetail.NOMOR_AGENDA,
      errSurat: '',
      errJenisSurat: false,
      errLampiran: '',
      errKodeArsipKom: false,
      errKodeArsipHlm: false,
      errKodeArsipManual: false,
      errDerajatSurat: false,
      errNomorSurat: false,
      errUnitPengirim: false,
      errTujuanSurat: false,
      errPerihal: false,
      errTglDiterima: false,
      errTglSurat: false,
      errPenandatangan: false,
      errNamaPengirim: false,
      errSifatNaskah: false,
      errMsgFileLampiran: '',
    }
    this.onSubmit = this.onSubmit.bind(this)
    this.handleModal = this.handleModal.bind(this)
    this.handleLoading = this.handleLoading.bind(this)

    this.onFileChange = this.onFileChange.bind(this)
    this.onFileChange2 = this.onFileChange2.bind(this)

    this.handleIdPencatatan = this.handleIdPencatatan.bind(this)
    this.handleIdPengguna = this.handleIdPengguna.bind(this)

    this.handleIdJenisSurat = this.handleIdJenisSurat.bind(this)
    this.handleKodeArsipKom = this.handleKodeArsipKom.bind(this)
    this.handleKodeArsipManual = this.handleKodeArsipManual.bind(this)
    this.handleKodeArsipHlm = this.handleKodeArsipHlm.bind(this)
    this.handleNamaFileSurat = this.handleNamaFileSurat.bind(this)
    this.handleNamaFileLampiran = this.handleNamaFileLampiran.bind(this)
    this.handleDerajatSurat = this.handleDerajatSurat.bind(this)
    this.handleNomorSurat = this.handleNomorSurat.bind(this)
    this.handleUnitPengirim = this.handleUnitPengirim.bind(this)
    this.handlePenandatangan = this.handlePenandatangan.bind(this)
    this.handleNamaPengirim = this.handleNamaPengirim.bind(this)
    this.handleTujuanSurat = this.handleTujuanSurat.bind(this)
    this.handlePerihal = this.handlePerihal.bind(this)
    this.handleTglDiterima = this.handleTglDiterima.bind(this)
    this.handleTglSurat = this.handleTglSurat.bind(this)
    this.handleSifatSurat = this.handleSifatSurat.bind(this)

    this.handleErrSurat = this.handleErrSurat.bind(this)
    this.handleErrJenisSurat = this.handleErrJenisSurat.bind(this)
    this.handleErrLampiran = this.handleErrLampiran.bind(this)
    this.handleErrKodeArsipKom = this.handleErrKodeArsipKom.bind(this)
    this.handleErrKodeArsipHlm = this.handleErrKodeArsipHlm.bind(this)
    this.handleErrKodeArsipManual = this.handleErrKodeArsipManual.bind(this)
    this.handleErrDerajatSurat = this.handleErrDerajatSurat.bind(this)
    this.handleErrNomorSurat = this.handleErrNomorSurat.bind(this)
    this.handleErrNamaPengirim = this.handleErrNamaPengirim.bind(this)
    this.handleErrUnitPengirim = this.handleErrUnitPengirim.bind(this)
    this.handleErrTujuanSurat = this.handleErrTujuanSurat.bind(this)
    this.handleErrPerihal = this.handleErrPerihal.bind(this)
    this.handleErrTglDiterima = this.handleErrTglDiterima.bind(this)
    this.handleErrTglSurat = this.handleErrTglSurat.bind(this)
    this.handleErrorPenandatangan = this.handleErrorPenandatangan.bind(this)
    this.handleErrSifatSurat = this.handleErrSifatSurat.bind(this)

    this.validateNomorSurat = this.validateNomorSurat.bind(this)
    this.validateTanggalSurat = this.validateTanggalSurat.bind(this)
    this.validateTanggalDiterima = this.validateTanggalDiterima.bind(this)
    this.validatePerihal = this.validatePerihal.bind(this)
    this.validateTujuanSurat = this.validateTujuanSurat.bind(this)
    this.validateUnitPengirim = this.validateUnitPengirim.bind(this)
    this.validateNamaPengirim = this.validateNamaPengirim.bind(this)
    this.validatePenandatangan = this.validatePenandatangan.bind(this)
    this.validateJenisSurat = this.validateJenisSurat.bind(this)
    this.validateDerajatSurat = this.validateDerajatSurat.bind(this)
    this.validateKodeArsipKom = this.validateKodeArsipKom.bind(this)
    this.validateKodeArsipManual = this.validateKodeArsipManual.bind(this)
    this.validateKodeArsipHlm = this.validateKodeArsipHlm.bind(this)
    this.validateSurat = this.validateSurat.bind(this)
    this.validateLampiran = this.validateLampiran.bind(this)
    this.validateSifatSurat = this.validateSifatSurat.bind(this)
  }
  validateLampiran(input) {
    const extension = '.pdf'
    let result = this.state.lampiran.name.match(extension)
    if (result) {
      if (this.state.lampiran.size > '10485760') {
        this.handleErrLampiran('Ukuran file melebihi 10 Mb')
      } else {
        this.handleErrLampiran('')
        let namasurat = this.state.nomorSurat.split('/').join('_')
        this.setState({
          namaFileLampiran: namasurat,
        })
      }
    } else {
      this.handleErrLampiran('Lampiran file harus pdf')
    }
  }
  validateSurat(input) {
    const extension = '.pdf'
    let result2 = this.state.surat.name.match(extension)
    if (result2) {
      if (this.state.surat.size > '10485760') {
        this.handleErrSurat('Ukuran file surat melebihi 10 Mb')
      } else {
        this.handleErrSurat('')
        let namasurat = this.state.nomorSurat.split('/').join('_')
        console.log('nama surat:' + namasurat)
        this.setState({
          namaFileSurat: namasurat,
        })
      }
    } else {
      this.handleErrSurat('Surat file harus pdf')
    }
  }
  validateKodeArsipManual(input) {
    if (input == null || input == '' || input == ' ') {
      this.handleErrKodeArsipManual(true)
    } else {
      this.handleErrKodeArsipManual(false)
    }
  }
  validateKodeArsipHlm(input) {
    if (input == null || input == '' || input == ' ') {
      this.handleErrKodeArsipHlm(true)
    } else {
      this.handleErrKodeArsipHlm(false)
    }
  }
  validateKodeArsipKom(input) {
    if (input == null || input == '' || input == ' ') {
      this.handleErrKodeArsipKom(true)
    } else {
      this.handleErrKodeArsipKom(false)
    }
  }
  validateDerajatSurat(input) {
    if (input == 0 || input == null || input == '') {
      this.handleErrDerajatSurat(true)
    } else {
      this.handleErrDerajatSurat(false)
    }
  }
  validateJenisSurat(input) {
    if (input == 0 || input == null || input == '') {
      this.handleErrJenisSurat(true)
    } else {
      this.handleErrJenisSurat(false)
    }
  }
  validateSifatSurat(input) {
    if (input == 0 || input == null || input == '') {
      this.handleErrSifatSurat(true)
    } else {
      this.handleErrSifatSurat(false)
    }
  }
  validatePenandatangan(input) {
    const re = /^[a-zA-Z0-9 ]*$/
    if (input.length <= 0 || input.length >= 20 || input == null) {
      this.handleErrorPenandatangan(true)
    } else {
      let result = input.match(re)

      if (result) {
        this.handleErrorPenandatangan(false)
      } else {
        this.handleErrorPenandatangan(true)
      }
    }
  }
  validateNamaPengirim(input) {
    const re = /^[a-zA-Z0-9 ]*$/

    if (input.length <= 0 || input.length >= 20 || input == null) {
      this.handleErrNamaPengirim(true)
    } else {
      let result = input.match(re)
      if (result) {
        this.handleErrNamaPengirim(false)
      } else {
        this.handleErrNamaPengirim(true)
      }
    }
  }
  validateUnitPengirim(input) {
    if (input == 0 || input == null || input == '') {
      this.handleErrUnitPengirim(true)
    } else {
      this.handleErrUnitPengirim(false)
    }
  }
  validateTujuanSurat(input) {
    if (input == 0 || input == null || input == '') {
      this.handleErrTujuanSurat(true)
    } else {
      this.handleErrTujuanSurat(false)
    }
  }
  validatePerihal(input) {
    if (input == null || input == '') {
      this.handleErrPerihal(true)
    } else {
      this.handleErrPerihal(false)
    }
  }
  validateTanggalDiterima(input) {
    if (input == null) {
      this.handleErrTglDiterima(true)
    } else {
      this.handleErrTglDiterima(false)
    }
  }
  validateTanggalSurat(input) {
    if (input == null) {
      this.handleErrTglSurat(true)
    } else {
      this.handleErrTglSurat(false)
    }
  }
  validateNomorSurat(input) {
    if (input == null || input == '') {
      this.handleErrNomorSurat(true)
    } else {
      this.handleErrNomorSurat(false)
    }
  }
  handleErrSurat(props) {
    this.setState({
      errSurat: props,
    })
  }
  handleErrJenisSurat(props) {
    this.setState({
      errJenisSurat: props,
    })
  }
  handleErrSifatSurat(props) {
    this.setState({
      errSifatNaskah: props,
    })
  }
  handleErrLampiran(props) {
    this.setState({
      errLampiran: props,
    })
  }
  handleErrKodeArsipKom(props) {
    this.setState({
      errKodeArsipKom: props,
    })
  }
  handleErrKodeArsipHlm(props) {
    this.setState({
      errKodeArsipHlm: props,
    })
  }
  handleErrKodeArsipManual(props) {
    this.setState({
      errKodeArsipManual: props,
    })
  }
  handleErrDerajatSurat(props) {
    this.setState({
      errDerajatSurat: props,
    })
  }
  handleErrNomorSurat(props) {
    this.setState({
      errNomorSurat: props,
    })
  }
  handleErrUnitPengirim(props) {
    this.setState({
      errUnitPengirim: props,
    })
  }
  handleErrTujuanSurat(props) {
    this.setState({
      errTujuanSurat: props,
    })
  }
  handleErrPerihal(props) {
    this.setState({
      errPerihal: props,
    })
  }
  handleErrTglDiterima(props) {
    this.setState({
      errTglDiterima: props,
    })
  }
  handleErrTglSurat(props) {
    this.setState({
      errTglSurat: props,
    })
  }
  handleErrorPenandatangan(props) {
    this.setState({
      errPenandatangan: props,
    })
  }
  handleErrNamaPengirim(props) {
    this.setState({
      errNamaPengirim: props,
    })
  }
  handleSifatSurat(e) {
    let value = e.target.value
    this.setState({
      sifatNaskah: value,
    })
  }
  handleIdPencatatan(e) {
    let value = e.target.value

    this.setState({
      idPencatatan: value,
    })
  }
  handleIdPengguna(e) {
    let value = e.target.value

    this.setState({
      idPengguna: value,
    })
  }
  handleIdJenisSurat(e) {
    let value = e.target.value

    this.setState({
      idJenisSurat: value,
    })
  }
  handleKodeArsipKom(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      kodeArsipKom: str,
    })
  }
  handleKodeArsipManual(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      kodeArsipManual: str,
    })
  }
  handleKodeArsipHlm(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      kodeArsipHlm: str,
    })
  }
  handleNamaFileSurat(e) {
    let value = e.target.value

    this.setState({
      namaFileSurat: value,
    })
  }
  handleNamaFileLampiran(e) {
    let value = e.target.value

    this.setState({
      namaFileLampiran: value,
    })
  }
  handleDerajatSurat(e) {
    let value = e.target.value

    this.setState({
      derajatSurat: value,
    })
  }
  handleNomorSurat(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      nomorSurat: str,
    })
  }
  handleUnitPengirim(e) {
    let value = e.target.value
    // let str = ''
    // str = value.replace(/\s\s+/g, '')

    this.setState({
      unitPengirim: value,
    })
  }
  handlePenandatangan(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      penandatangan: str,
    })
  }
  handleNamaPengirim(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      namaPengirim: str,
    })
  }
  handleTujuanSurat(e) {
    let value = e.target.value
    // let str = ''
    // str = value.replace(/\s\s+/g, '')

    this.setState({
      tujuanSurat: value,
    })
  }
  handlePerihal(e) {
    let value = e.target.value
    let str = ''
    str = value.replace(/\s\s+/g, '')

    this.setState({
      perihal: str,
    })
  }
  handleTglDiterima(value) {
    this.setState({
      tglDiterima: value,
    })
  }
  handleTglSurat(exDate, value) {
    this.setState({
      tglSurat: exDate,
    })
    this.setState({
      firstDate: value,
    })
  }
  handleLoading() {
    this.setState({
      modalLoading: !this.state.modalLoading,
    })
  }
  handleModal() {
    this.setState({
      showModal: !this.state.showModal,
      modalLoading: false,
      idPencatatan: this.props.SuratDetail.ID_PENCATATAN,
      idPengguna: this.props.SuratDetail.ID_PENGGUNA,
      idJenisSurat: this.props.SuratDetail.ID_JENIS_SURAT,
      kodeArsipKom: this.props.SuratDetail.KODE_ARSIP_KOM,
      kodeArsipHlm: this.props.SuratDetail.KODE_ARSIP_HLM,
      kodeArsipManual: this.props.SuratDetail.KODE_ARSIP_MANUAL,
      namaFileSurat: this.props.SuratDetail.NAMA_FILE_SURAT,
      namaFileLampiran: this.props.SuratDetail.NAMA_FILE_LAMPIRAN,
      derajatSurat: this.props.SuratDetail.ID_DERAJAT_SURAT,
      nomorSurat: this.props.SuratDetail.NOMOR_SURAT,
      unitPengirim: this.props.SuratDetail.ID_KODE_UNIT_KERJA,
      penandatangan: this.props.SuratDetail.PENANDATANGAN,
      namaPengirim: this.props.SuratDetail.NAMA_PENGIRIM,
      tujuanSurat: this.props.SuratDetail.TUJUAN_SURAT,
      perihal: this.props.SuratDetail.PERIHAL,
      tglDiterima: this.props.SuratDetail.TGL_DITERIMA,
      tglSurat: this.props.SuratDetail.TGL_SURAT,
      sifatNaskah: this.props.SuratDetail.ID_SIFAT_NASKAH,
      lastAgenda: this.props.SuratDetail.NOMOR_AGENDA,

      errSurat: '',
      errJenisSurat: false,
      errLampiran: '',
      errKodeArsipKom: false,
      errKodeArsipHlm: false,
      errKodeArsipManual: false,
      errDerajatSurat: false,
      errNomorSurat: false,
      errUnitPengirim: false,
      errTujuanSurat: false,
      errPerihal: false,
      errTglDiterima: false,
      errTglSurat: false,
      errPenandatangan: false,
      errNamaPengirim: false,
      errSifatNaskah: false,
      errMsgFileLampiran: '',
      surat: null,
      lampiran: null,
    })
    console.log('id pencatatan :' + this.state.idPencatatan)
  }

  onFileChange(event) {
    // Update the state
    this.setState({ surat: event.target.files[0] })
  }
  onFileChange2(event) {
    // Update the state
    this.setState({ lampiran: event.target.files[0] })
  }

  async onSubmit(e) {
    e.preventDefault()
    if (
      this.state.idJenisSurat != this.props.SuratDetail.ID_JENIS_SURAT ||
      this.state.kodeArsipKom != this.props.SuratDetail.KODE_ARSIP_KOM ||
      this.state.kodeArsipHlm != this.props.SuratDetail.KODE_ARSIP_HLM ||
      this.state.kodeArsipManual != this.props.SuratDetail.KODE_ARSIP_MANUAL ||
      this.state.namaFileSurat != this.props.SuratDetail.NAMA_FILE_SURAT ||
      this.state.namaFileLampiran !=
        this.props.SuratDetail.NAMA_FILE_LAMPIRAN ||
      this.state.derajatSurat != this.props.SuratDetail.ID_DERAJAT_SURAT ||
      this.state.nomorSurat != this.props.SuratDetail.NOMOR_SURAT ||
      this.state.unitPengirim != this.props.SuratDetail.ID_KODE_UNIT_KERJA ||
      this.state.penandatangan != this.props.SuratDetail.PENANDATANGAN ||
      this.state.namaPengirim != this.props.SuratDetail.NAMA_PENGIRIM ||
      this.state.tujuanSurat != this.props.SuratDetail.TUJUAN_SURAT ||
      this.state.perihal != this.props.SuratDetail.PERIHAL ||
      this.state.tglDiterima != this.props.SuratDetail.TGL_DITERIMA ||
      this.state.tglSurat != this.props.SuratDetail.TGL_SURAT ||
      this.state.sifatNaskah != this.props.SuratDetail.ID_SIFAT_NASKAH ||
      this.state.lastAgenda != this.props.SuratDetail.NOMOR_AGENDA ||
      this.state.surat != null ||
      this.state.lampiran != null
    ) {
      await this.validateNomorSurat(this.state.nomorSurat)
      await this.validateTanggalSurat(this.state.tglSurat)
      await this.validateTanggalDiterima(this.state.tglDiterima)
      await this.validatePerihal(this.state.perihal)
      await this.validateTujuanSurat(this.state.tujuanSurat)
      await this.validateUnitPengirim(this.state.unitPengirim)
      await this.validateNamaPengirim(this.state.namaPengirim)
      await this.validatePenandatangan(this.state.penandatangan)
      await this.validateJenisSurat(this.state.idJenisSurat)
      await this.validateSifatSurat(this.state.sifatNaskah)
      await this.validateDerajatSurat(this.state.derajatSurat)
      await this.validateKodeArsipHlm(this.state.kodeArsipHlm)
      await this.validateKodeArsipKom(this.state.kodeArsipKom)
      await this.validateKodeArsipManual(this.state.kodeArsipManual)
      if (this.state.surat != null) {
        await this.validateSurat(this.state.surat)
      }
      if (this.state.lampiran != null) {
        await this.validateLampiran(this.state.lampiran)
      }
      if (
        this.state.errNomorSurat == false &&
        this.state.errTglDiterima == false &&
        this.state.errTglSurat == false &&
        this.state.errPerihal == false &&
        this.state.errTujuanSurat == false &&
        this.state.errUnitPengirim == false &&
        this.state.errNamaPengirim == false &&
        this.state.errPenandatangan == false &&
        this.state.errJenisSurat == false &&
        this.state.errDerajatSurat == false &&
        this.state.errKodeArsipHlm == false &&
        this.state.errKodeArsipKom == false &&
        this.state.errKodeArsipManual == false &&
        this.state.errSifatNaskah == false
      ) {
        this.handleLoading()
        let formData = new FormData()
        formData.append('id', this.state.idPencatatan)
        formData.append('id_pengguna', this.props.User.currentUser.ID_PENGGUNA)
        formData.append('id_derajat_surat', this.state.derajatSurat)
        formData.append('id_jenis_surat', this.state.idJenisSurat)
        formData.append('kode_arsip_kom', this.state.kodeArsipKom)
        formData.append('kode_arsip_hlm', this.state.kodeArsipHlm)
        formData.append('kode_arsip_manual', this.state.kodeArsipManual)
        if (this.state.namaFileSurat != null) {
          formData.append('nama_file_surat', this.state.namaFileSurat)
        }
        if (this.state.namaFileLampiran != null) {
          formData.append(
            'nama_file_lampiran',
            this.state.namaFileLampiran + '_lampiran',
          )
        }
        let fd = new FormData()
        fd.append('id_pencatatan', this.state.idPencatatan)
        fd.append('id_pengguna', this.props.User.currentUser.ID_PENGGUNA)
        fd.append('id_jenis_surat', this.state.idJenisSurat)
        fd.append('kode_arsip_kom', this.state.kodeArsipKom)
        fd.append('kode_arsip_hlm', this.state.kodeArsipHlm)
        fd.append('kode_arsip_manual', this.state.kodeArsipManual)
        if (this.state.namaFileSurat != null) {
          fd.append('nama_file_surat', this.state.namaFileSurat)
        }
        if (this.state.namaFileLampiran != null) {
          fd.append(
            'nama_file_lampiran',
            this.state.namaFileLampiran + '_lampiran',
          )
        }

        fd.append('id_derajat_surat', this.state.derajatSurat)
        fd.append('nomor_surat', this.state.nomorSurat)
        fd.append('id_kode_unit', this.state.unitPengirim)
        fd.append('id_sifat_naskah', this.state.sifatNaskah)
        fd.append('penandatangan', this.state.penandatangan)
        fd.append('nama_pengirim', this.state.namaPengirim)
        fd.append('tujuan_surat', this.state.tujuanSurat)
        fd.append('perihal', this.state.perihal)
        fd.append('tgl_diterima', this.state.tglDiterima)
        fd.append('tgl_surat', this.state.tglSurat)
        fd.append('no_agenda', this.state.lastAgenda)

        await api()
          .post('api/updatePencatatan', formData)
          .then((response) => {
            api()
              .post('api/updateSuratMasuk', fd)
              .then((response) => {
                if (this.state.surat == null && this.state.lampiran == null) {
                  this.handleLoading()
                  this.handleModal()
                  window.location.reload('/#/SuratMasuk')
                }
              })
          })
        if (this.state.surat != null && this.state.errSurat == '') {
          let fd2 = new FormData()
          fd2.append('myFile', this.state.surat)
          fd2.append('namefile', this.state.namaFileSurat)
          await api()
            .post('api/addSurat', fd2)
            .then((response) => {
              if (this.state.lampiran == null) {
                this.handleLoading()
                this.handleModal()
                window.location.reload('/#/SuratMasuk')
              }
            })
        }
        if (this.state.lampiran != null && this.state.errLampiran == '') {
          let fd3 = new FormData()
          fd3.append('myFile', this.state.lampiran)
          fd3.append('namefile', this.state.namaFileLampiran + '_lampiran')
          await api()
            .post('api/addSurat', fd3)
            .then((response) => {
              //this.handleModal()
              //jika dari BE error
              this.handleLoading()
              this.handleModal()
              window.location.reload('/#/SuratMasuk')
            })
        }
      }
    } else {
      this.handleModal()
    }
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
            <img
              className="h-auto align-middle"
              src="assets/img/icon/Pencil.png"
            />
          </div>
          <div className="font-bold text-putih ml-1 mr-2">Edit Data Surat</div>
        </button>

        {this.state.showModal ? (
          <>
            <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
              <div className="relative w-auto h-95% my-6 mx-auto max-w-6xl">
                {/*content*/}
                <div className="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                  {/*header*/}
                  <div className="flex items-start justify-center ">
                    <button
                      className="p-1 ml-auto  border-2 float-right  leading-none  outline-none focus:outline-none"
                      onClick={this.handleModal}
                    >
                      <img
                        className="justify-center items-center"
                        src="assets/img/icon/x.png"
                      />
                    </button>
                  </div>
                  <div className="flex flex-row items-start p-2 border-b ml-6 border-solid border-blueGray-200 rounded-t">
                    <div>
                      <img className="w-8" src="assets/img/icon/Surat.png" />
                    </div>
                    <div className="flex ">
                      <h3 className="text-xl font-semibold  ">
                        Edit Data Surat Masuk
                      </h3>
                    </div>
                  </div>

                  {/*body*/}
                  <div className="relative p-6 flex-auto">
                    <div className="my-4 text-blueGray-500 text-lg leading-relaxed">
                      {/* <FormData /> */}
                      <form
                        className="mt-8"
                        action="#"
                        method="POST"
                        onSubmit={this.onSubmit}
                      >
                        <div>
                          <div className="">
                            <div className="flex flex-row grid grid-cols-2">
                              <div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Nomor Agenda </div>
                                    <div className="text-danger ml-2"> </div>
                                  </div>
                                  <div className="justify-end ">
                                    <div
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	mr-4  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                    >
                                      {this.state.lastAgenda}
                                    </div>
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Nomor Surat </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="text"
                                      name="nomorSurat"
                                      required
                                      id="nomorSurat"
                                      value={this.state.nomorSurat}
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	mr-4  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.handleNomorSurat}
                                    />
                                    {this.state.errNomorSurat ? (
                                      <div className="text-danger text-xs mb-3">
                                        Nomor surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>

                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Tanggal Surat </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <div
                                      type="text"
                                      name="tglSurat"
                                      required
                                      id="tglSurat"
                                      value={this.state.tglSurat}
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                    >
                                      <Kalender
                                        onChange={(exDate, value) =>
                                          this.handleTglSurat(exDate, value)
                                        }
                                        data={this.state.tglDiterima}
                                      />
                                    </div>

                                    {this.state.errTglSurat ? (
                                      <div className="text-danger text-xs mb-3">
                                        Tanggal surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Tanggal Diterima </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <div
                                      type="text"
                                      name="tglDiterima"
                                      required
                                      id="tglDiterima"
                                      value={this.state.tglDiterima}
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none	w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                    >
                                      <Kalender
                                        onChange={(exDate) =>
                                          this.handleTglDiterima(exDate)
                                        }
                                        minDate={this.state.firstDate}
                                        data={this.state.tglDiterima}
                                      />
                                    </div>
                                    {this.state.errTglDiterima ? (
                                      <div className="text-danger text-xs mb-3">
                                        Tanggal diterima harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Perihal </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="text"
                                      name="perihal"
                                      required
                                      id="perihal"
                                      value={this.state.perihal}
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none  w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.handlePerihal}
                                    />
                                    {this.state.errPerihal ? (
                                      <div className="text-danger text-xs mb-3">
                                        Perihal harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Tujuan Surat </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <select
                                      type="text"
                                      name="tujuanSurat"
                                      required
                                      id="tujuanSurat"
                                      value={this.state.tujuanSurat}
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      value={this.state.tujuanSurat}
                                      onChange={this.handleTujuanSurat}
                                    >
                                      <option value="0">
                                        Pilih tujuan ...
                                      </option>
                                      {this.props.RUnitKerja.allUnitKerjaInfo.map(
                                        (item) => {
                                          return (
                                            <option
                                              key={item.ID_KODE_UNIT_KERJA}
                                              value={item.KODE_UNIT_KERJA}
                                            >
                                              {item.KODE_UNIT_KERJA}
                                            </option>
                                          )
                                        },
                                      )}
                                    </select>
                                    {this.state.errTujuanSurat ? (
                                      <div className="text-danger text-xs mb-3">
                                        Tujuan surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>

                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Unit Pengirim </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <select
                                      type="text"
                                      name="unitPengirim"
                                      required
                                      id="unitPengirim"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      value={this.state.unitPengirim}
                                      onChange={this.handleUnitPengirim}
                                    >
                                      <option value="0">
                                        Pilit unit pengirim
                                      </option>
                                      {this.props.RUnitKerja.allUnitKerjaInfo.map(
                                        (item) => {
                                          return (
                                            <option
                                              key={item.ID_KODE_UNIT_KERJA}
                                              value={item.ID_KODE_UNIT_KERJA}
                                            >
                                              {item.KODE_UNIT_KERJA}
                                            </option>
                                          )
                                        },
                                      )}
                                    </select>
                                    {this.state.errUnitPengirim ? (
                                      <div className="text-danger text-xs mb-3">
                                        Unit Pengirim harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Nama Pengirim </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="text"
                                      name="namaPengirim"
                                      value={this.state.namaPengirim}
                                      required
                                      id="namaPengirim"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.handleNamaPengirim}
                                    />
                                    {this.state.errNamaPengirim ? (
                                      <div className="text-danger text-xs mb-3">
                                        Nama Pengirim harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Penandatangan </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="text"
                                      value={this.state.penandatangan}
                                      name="penandatangan"
                                      required
                                      id="penandatangan"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.handlePenandatangan}
                                    />

                                    {this.state.errPenandatangan ? (
                                      <div className="text-danger text-xs mb-3">
                                        Penandatangan harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Jenis Surat </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <select
                                      type="text"
                                      name="jenisSurat"
                                      required
                                      id="jenisSurat"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none	 w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      value={this.state.idJenisSurat}
                                      onChange={this.handleIdJenisSurat}
                                    >
                                      <option value="0">
                                        Pilih Jenis Surat ...
                                      </option>
                                      {this.props.AllJenisSurat.allJenisSurat.map(
                                        (item, index) => {
                                          return (
                                            <option
                                              key={item.ID_JENIS_SURAT}
                                              value={item.ID_JENIS_SURAT}
                                            >
                                              {item.JENIS_SURAT}
                                            </option>
                                          )
                                        },
                                      )}
                                    </select>
                                    {this.state.errJenisSurat ? (
                                      <div className="text-danger text-xs mb-3">
                                        Jenis surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Sifat Surat </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <select
                                      type="text"
                                      name="jenisSurat"
                                      required
                                      id="jenisSurat"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none	 w-56 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      value={this.state.sifatNaskah}
                                      onChange={this.handleSifatSurat}
                                    >
                                      <option value="0">
                                        Pilih Sifat Surat ...
                                      </option>
                                      {this.props.RSifatSurat.allSifatSuratInfo.map(
                                        (item, index) => {
                                          return (
                                            <option
                                              key={item.ID_SIFAT_NASKAH}
                                              value={item.ID_SIFAT_NASKAH}
                                            >
                                              {item.SIFAT_NASKAH}
                                            </option>
                                          )
                                        },
                                      )}
                                    </select>
                                    {this.state.errSifatNaskah ? (
                                      <div className="text-danger text-xs mb-3">
                                        Sifat surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Derajat Surat </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <select
                                      type="text"
                                      name="derajatSurat"
                                      required
                                      id="derajatSurat"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none	w-56  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      value={this.state.derajatSurat}
                                      onChange={this.handleDerajatSurat}
                                    >
                                      <option value="0">
                                        Pilih Derajat Surat ...
                                      </option>
                                      {this.props.RDerajatSurat.allDerajatSuratInfo.map(
                                        (item) => {
                                          return (
                                            <option
                                              key={item.ID_DERAJAT_SURAT}
                                              value={item.ID_DERAJAT_SURAT}
                                            >
                                              {item.DERAJAT_SURAT}
                                            </option>
                                          )
                                        },
                                      )}
                                    </select>
                                    {this.state.errDerajatSurat ? (
                                      <div className="text-danger text-xs mb-3">
                                        Derajat surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Kode Arsip Kom</div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="text"
                                      name="kodeArsipKom"
                                      required
                                      id="kodeArsipKom"
                                      value={this.state.kodeArsipKom}
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none	w-56  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.handleKodeArsipKom}
                                    />
                                    {this.state.errKodeArsipKom ? (
                                      <div className="text-danger text-xs mb-3">
                                        Kode arsip harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Kode Arsip Hlm </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="text"
                                      name="kodeArsipHlm"
                                      required
                                      id="kodeArsipHlm"
                                      value={this.state.kodeArsipHlm}
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.handleKodeArsipHlm}
                                    />
                                    {this.state.errKodeArsipHlm ? (
                                      <div className="text-danger text-xs mb-3">
                                        kode arsip surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Kode Arsip Manual </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="text"
                                      value={this.state.kodeArsipManual}
                                      name="kodeArsipManual"
                                      required
                                      id="kodeArsipManual"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.handleKodeArsipManual}
                                    />
                                    {this.state.errKodeArsipManual ? (
                                      <div className="text-danger text-xs mb-3">
                                        Kode arsip surat harus diisi
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Surat </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="file"
                                      name="surat"
                                      required
                                      id="surat"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.onFileChange}
                                    />
                                    {this.state.errSurat != '' ? (
                                      <div className="text-danger text-xs mb-3">
                                        {this.state.errSurat}
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div
                                    htmlFor="nama"
                                    className="text-sm mb-2 font-bold flex flex-row "
                                  >
                                    <div>Lampiran </div>
                                    <div className="text-danger ml-2"> *</div>
                                  </div>
                                  <div className="justify-end ">
                                    <input
                                      type="file"
                                      name="lampiran"
                                      required
                                      id="lampiran"
                                      className={
                                        'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-56	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                      }
                                      onChange={this.onFileChange2}
                                    />
                                    {this.state.errLampiran != '' ? (
                                      <div className="text-danger text-xs mb-3">
                                        {this.state.errLampiran}
                                      </div>
                                    ) : (
                                      <></>
                                    )}
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2 mb-4 mt-4  p-2">
                                  <div></div>
                                  <div className=" text-xs text-abu ">
                                    Keterangan (*): data wajib diisi.
                                  </div>
                                </div>
                                <div className="flex flex-row grid grid-cols-2">
                                  <div></div>
                                  <button
                                    type="submit"
                                    className=" w-1/2 p-1 border-2 rounded-md  bg-biru justify-center align-center"
                                    onClick={this.onSubmit}
                                    value="Add Pengguna"
                                  >
                                    <div className="text-sm mb-2 text-white	h-6 font-bold justify-center ">
                                      Simpan
                                    </div>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div className="opacity-25 fixed inset-0 z-40 bg-black"></div>
          </>
        ) : null}
        <ModalLoading
          loading={this.state.modalLoading}
          title={'Sedang diproses sistem'}
        />
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, {})(EditFormSurat)
