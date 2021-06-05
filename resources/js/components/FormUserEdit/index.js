import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
// import createuser from "./index";
class FormUserEdit extends Component {
  constructor(props) {
    super(props)
    this.state = {
      dir: [],
      nama: this.props.nama,
      username: this.props.username,
      role: this.props.role,
      password: '',
      confirmPass: '',
      id: this.props.id,
      showModal: false,
      errorNama: false,
      errorRole: false,
      errorPassword: false,
      errorConfirmPass: false,
    }

    this.handleInputNama = this.handleInputNama.bind(this)
    this.handleInputRole = this.handleInputRole.bind(this)
    this.handleInputPassword = this.handleInputPassword.bind(this)
    this.handleInputConfirmPass = this.handleInputConfirmPass.bind(this)
    this.handleErrorNama = this.handleErrorNama.bind(this)
    this.handleErrorRole = this.handleErrorRole.bind(this)
    this.handleErrorPassword = this.handleErrorPassword.bind(this)
    this.handleErrorConfirmPassword = this.handleErrorConfirmPassword.bind(this)
    this.onSubmit = this.onSubmit.bind(this)
    this.handleModal = this.handleModal.bind(this)
    this.validateInputNama = this.validateInputNama.bind(this)
    this.validateInputRole = this.validateInputRole.bind(this)
    this.validateInputPassword = this.validateInputPassword.bind(this)
    this.validateInputConfirmPass = this.validateInputConfirmPass.bind(this)
  }
  //handle input changes and update item state

  handleErrorNama(props) {
    this.setState({
      errorNama: props,
    })
  }

  handleErrorPassword(props) {
    this.setState({
      errorPassword: props,
    })
  }
  handleErrorConfirmPassword(props) {
    this.setState({
      errorConfirmPass: props,
    })
  }
  handleErrorRole(props) {
    this.setState({
      errorRole: props,
    })
  }
  handleModal() {
    this.setState({
      showModal: !this.state.showModal,
    })
  }
  handleInputNama(e) {
    let value = e.target.value

    this.setState({
      nama: value,
    })
  }

  handleInputRole(e) {
    let value = e.target.value
    this.setState({ role: value })
  }
  handleInputPassword(e) {
    let value = e.target.value
    this.setState({ password: value })
  }
  handleInputConfirmPass(e) {
    let value = e.target.value
    this.setState({ confirmPass: value })
  }
  async onSubmit(e) {
    e.preventDefault()
    await this.validateInputNama(this.state.nama)
    await this.validateInputRole(this.state.role)
    await this.validateInputPassword(this.state.password)
    await this.validateInputConfirmPass(this.state.confirmPass)
    // console.log('length' + this.state.username.length)
    // console.log('con pass:' + this.state.confirmPass)
    if (
      this.state.errorNama == false &&
      this.state.errorPassword == false &&
      this.state.errorConfirmPass == false &&
      this.state.errorRole == false
    ) {
      api()
        .post('api/updateUser', {
          NAMA: this.state.nama,
          USERNAME: this.state.username,
          ROLE: this.state.role,
          PASSWORD: this.state.password,
          id: this.state.id,
        })
        .then((response) => {
          this.setState({
            item: {
              nama: '',
              username: '',
              role: '',
              password: '',
            },
          })
          this.handleModal()
        })
        .catch((err) => console.log(err))
      console.log('valid form')
    } else {
      console.log('error form')
    }
  }
  validateInputNama(input) {
    const re = /^[a-zA-Z ]*$/
    let result = input.match(re)
    if (result) {
      if (input.length <= 0 || input.length >= 20) {
        this.handleErrorNama(true)
      } else {
        this.handleErrorNama(false)
      }
    } else {
      this.handleErrorNama(true)
    }
  }

  validateInputRole(input) {
    if (
      this.state.role == null ||
      this.state.role == 0 ||
      this.state.role == ''
    ) {
      this.handleErrorRole(true)
    } else {
      this.handleErrorRole(false)
    }
  }
  validateInputPassword(input) {
    const re = /(?=(.*[0-9]))((?=.*[A-Za-z0-9]))^.{8,16}$/

    let result = input.match(re)
    if (result) {
      if (input.length < 8 || input.length >= 16) {
        this.handleErrorPassword(true)
      } else {
        this.handleErrorPassword(false)
      }
    } else {
      this.handleErrorPassword(true)
    }
  }
  validateInputConfirmPass(input) {
    if (this.state.confirmPass != this.state.password) {
      this.handleErrorConfirmPassword(true)
    } else {
      this.handleErrorConfirmPassword(false)
    }
  }

  render() {
    return (
      <>
        <button
          className="flex flex-row bg-primary "
          type="button"
          onClick={this.handleModal}
        >
          <div>
            <img
              className="justify-center items-center"
              src="assets/img/icon/Pencil.png"
            />
          </div>
          <div className="font-bold text-xs text-white ml-2">Edit</div>
        </button>

        {this.state.showModal ? (
          <>
            <div className="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
              <div className="relative w-auto my-6 mx-auto max-w-6xl">
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
                  <div className=" items-start justify-center p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <div className=" flex justify-center">
                      <img
                        className="justify-self-center"
                        src="assets/img/icon/User-Circle.png"
                      />
                    </div>
                    <div className="flex justify-center">
                      <h3 className="text-3xl font-semibold  ">
                        Edit Data Pengguna
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
                          <div className="rounded-md shadow-sm ">
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="nama"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Nama Pengguna </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="text"
                                  name="nama"
                                  required
                                  id="nama"
                                  placeholder="Masukan Nama Pengguna"
                                  className={
                                    this.state.errorNama
                                      ? 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-red-500 border border-red-200 rounded-md py-2 pl-2 '
                                      : 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.nama}
                                  onChange={this.handleInputNama}
                                />

                                {this.state.errorNama &&
                                (this.state.nama == '' ||
                                  this.state.nama == null) ? (
                                  <>
                                    <div className="text-danger text-xs mb-3">
                                      Nama harus diisi
                                    </div>
                                  </>
                                ) : (
                                  <>
                                    {' '}
                                    {this.state.errorNama ? (
                                      <>
                                        <div className="text-danger text-xs mb-3">
                                          Hanya terdiri dari huruf abjad saja
                                        </div>
                                      </>
                                    ) : (
                                      <></>
                                    )}
                                  </>
                                )}
                              </div>
                            </div>

                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="username"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Username</div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <div className="focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3">
                                  {this.state.username}
                                </div>
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="role"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Role</div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <select
                                  type="text"
                                  name="role"
                                  required
                                  id="role"
                                  placeholder="Masukan Role"
                                  className={
                                    this.state.errorRole
                                      ? 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-red-500 border border-red-200 rounded-md py-2 pl-2 '
                                      : 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.role}
                                  onChange={this.handleInputRole}
                                >
                                  <option value="0">
                                    Pengguna sebagai ...
                                  </option>
                                  <option value="1">Administrator</option>
                                  <option value="2">Pengguna</option>
                                </select>
                                {this.state.errorRole ? (
                                  <>
                                    <div className="text-danger text-xs mb-3">
                                      Anda harus memilih satu
                                    </div>
                                  </>
                                ) : (
                                  <></>
                                )}
                              </div>
                            </div>

                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="password"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Password</div>
                                <div className="text-danger ml-2"> *</div>
                              </div>
                              <div className="justify-end ">
                                <input
                                  type="password"
                                  name="password"
                                  required
                                  id="password"
                                  placeholder="Masukan Password"
                                  className={
                                    this.state.errorNama
                                      ? 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-red-500 border border-red-200 rounded-md py-2 pl-2 '
                                      : 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.password}
                                  onChange={this.handleInputPassword}
                                />

                                {this.state.errorPassword &&
                                (this.state.password == '' ||
                                  this.state.password == null) ? (
                                  <>
                                    <div className="text-danger text-xs mb-3">
                                      Password harus diisi
                                    </div>
                                  </>
                                ) : (
                                  <>
                                    {' '}
                                    {this.state.errorPassword ? (
                                      <>
                                        <div className="text-danger text-xs mb-3">
                                          Minimal harus terdiri dari 8 karakter
                                          gabungan huruf dan angka
                                        </div>
                                      </>
                                    ) : (
                                      <></>
                                    )}
                                  </>
                                )}
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2">
                              <div
                                htmlFor="password"
                                className="text-sm mb-2 font-bold flex flex-row "
                              >
                                <div>Confirm Password </div>
                                <div className="text-danger ml-2"> *</div>
                              </div>{' '}
                              <div className="justify-end ">
                                <input
                                  type="password"
                                  name="confirm password"
                                  required
                                  id="confirm password"
                                  placeholder="Masukan Password"
                                  className={
                                    this.state.errorConfirmPass
                                      ? 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-red-500 border border-red-200 rounded-md py-2 pl-2 '
                                      : 'focus:form-control   focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-80	  text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3'
                                  }
                                  value={this.state.confirmPass}
                                  onChange={this.handleInputConfirmPass}
                                />{' '}
                                {this.state.errorConfirmPass &&
                                (this.state.confirmPass == '' ||
                                  this.state.confirmPass == null) ? (
                                  <>
                                    <div className="text-danger text-xs mb-3">
                                      Confirm password harus diisi
                                    </div>
                                  </>
                                ) : (
                                  <>
                                    {this.state.errorConfirmPass ? (
                                      <>
                                        <div className="text-danger text-xs mb-3">
                                          password tidak cocok
                                        </div>
                                      </>
                                    ) : (
                                      <></>
                                    )}
                                  </>
                                )}
                              </div>
                            </div>
                            <div className="flex flex-row grid grid-cols-2 mb-4 mt-4">
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
                                <div className="text-sm mb-2 text-white	h-6 font-bold ">
                                  Simpan
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  {/*footer*/}
                  {/* <div className="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                    <button
                      className="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="button"
                      onClick={this.handleModal}
                    >
                      Close
                    </button>
                    <button
                      className="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="button"
                      onClick={this.handleModal}
                    >
                      Save Changes
                    </button>
                  </div> */}
                </div>
              </div>
            </div>
            <div className="opacity-25 fixed inset-0 z-40 bg-black"></div>
          </>
        ) : null}
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, {})(FormUserEdit)
