import React, { Component } from 'react'
import * as FaIcons from 'react-icons/fa'
import * as AiIcons from 'react-icons/ai'
import { Link, NavLink, Redirect } from 'react-router-dom'
import { SidebarData } from './SidebarData'
import './Navbar.css'
import { IconContext } from 'react-icons'

import { connect } from 'react-redux'
import { setPath } from '../../actions'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

class Navbar extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {
      pathActive: '',
    }
    this.onLink1 = this.onLink1.bind(this)
    this.onLink2 = this.onLink2.bind(this)
    this.onLink3 = this.onLink3.bind(this)
    this.onLink4 = this.onLink4.bind(this)
    this.onLink5 = this.onLink5.bind(this)
    this.onLink6 = this.onLink6.bind(this)
    this.onLink7 = this.onLink7.bind(this)
  }
  setPath(props) {
    this.props.setPath(props)
  }
  onLink1() {
    this.setPath('BerandaAdmin')
    console.log('path:' + this.state.pathActive)
  }
  onLink2() {
    this.setPath('Surat')

    console.log('path:' + this.state.pathActive)
  }
  onLink3() {
    this.setPath('User')

    console.log('path:' + this.state.pathActive)
  }
  onLink4() {
    this.setPath('Beranda')

    console.log('path:' + this.state.pathActive)
  }
  onLink5() {
    this.setPath('SuratMasuk')

    console.log('path:' + this.state.pathActive)
  }
  onLink6() {
    this.setPath('SuratKeluar')

    console.log('path:' + this.state.pathActive)
  }
  onLink7() {
    this.setPath('Disposisi')

    console.log('path:' + this.state.pathActive)
  }
  render() {
    return (
      //html
      //js
      <>
        <div
          className={
            this.props.bar
              ? 'flex flex-col w-13%  h-screen bg-gradient-to-r from-black to-blue-500 '
              : 'flex flex-col w-0  h-screen'
          }
        >
          <IconContext.Provider value={{ color: '#fff' }}>
            <nav
              className={
                this.props.bar
                  ? 'left-0	duration-300'
                  : 'bg-white	 w-12	 flex justify-center	fixed top-0 -left-full  duration-700	'
              }
            >
              {this.props.User.currentUser.ROLE == 1 ? (
                <>
                  <ul className="w-full mt-2 ml-2 ">
                    {this.props.Path.currentPath == 'BerandaAdmin' ? (
                      <li className="bg-brokenblack mb-5 w-93% mt-2">
                        <button>
                          <img
                            className=" "
                            src="assets/img/icon/Beranda-Active.png"
                          />
                          <div className="text-biru font-bold	">Beranda</div>
                        </button>
                      </li>
                    ) : (
                      <li className="mb-5 	">
                        <button onClick={this.onLink1}>
                          <Link to={'/'} replace>
                            <img
                              className=" "
                              src="assets/img/icon/Beranda-Pasive.png"
                            />
                            <div className="text-primary">Beranda</div>
                          </Link>
                        </button>
                      </li>
                    )}

                    {this.props.Path.currentPath == 'Surat' ? (
                      <li className="bg-brokenblack mb-5">
                        <button>
                          <img
                            className=" "
                            src="assets/img/icon/Surat-Active.png"
                          />{' '}
                          <div className="text-biru font-bold	">
                            Kelola Surat
                          </div>
                        </button>
                      </li>
                    ) : (
                      <li className="mb-5">
                        <button onClick={this.onLink2}>
                          <Link to="/KelolaSurat" replace>
                            <img
                              className=" "
                              src="assets/img/icon/Surat-Pasive.png"
                            />{' '}
                            <div className="text-primary">Kelola Surat</div>
                          </Link>
                        </button>{' '}
                      </li>
                    )}

                    {this.props.Path.currentPath == 'User' ? (
                      <li className="bg-brokenblack mb-5">
                        <button>
                          <img
                            className=" "
                            src="assets/img/icon/User-Active.png"
                          />
                          <div className="text-biru font-bold	">
                            Kelola Pengguna
                          </div>
                        </button>{' '}
                      </li>
                    ) : (
                      <li className="mb-5">
                        <button onClick={this.onLink3}>
                          <Link to="/KelolaPengguna" replace>
                            <img
                              className=" "
                              src="assets/img/icon/User-Pasive.png"
                            />{' '}
                            <div className="text-primary">Kelola Pengguna</div>
                          </Link>
                        </button>
                      </li>
                    )}
                  </ul>
                </>
              ) : (
                <>
                  {' '}
                  <ul className="w-full">
                    {this.props.Path.currentPath == 'Beranda' ? (
                      <li className="bg-brokenblack mb-5  mt-2">
                        <button>
                          <img
                            className=" "
                            src="assets/img/icon/Beranda-Active.png"
                          />
                          <div className="text-biru font-bold	">Beranda</div>
                        </button>
                      </li>
                    ) : (
                      <li className="mb-5  mt-2">
                        <button onClick={this.onLink4}>
                          <Link to={'/Dashboard'} replace>
                            <img
                              className=" "
                              src="assets/img/icon/Beranda-Pasive.png"
                            />
                            <div className="text-primary">Beranda</div>
                          </Link>
                        </button>
                      </li>
                    )}

                    {this.props.Path.currentPath == 'SuratMasuk' ? (
                      <li className="bg-brokenblack mb-5">
                        <button>
                          <img
                            className=" "
                            src="assets/img/icon/Surat-Active.png"
                          />{' '}
                          <div className="text-biru font-bold	">Surat Masuk</div>
                        </button>
                      </li>
                    ) : (
                      <li className="mb-5">
                        <button onClick={this.onLink5}>
                          <Link to="/SuratMasuk" replace>
                            <img
                              className=" "
                              src="assets/img/icon/Surat-Pasive.png"
                            />{' '}
                            <div className="text-primary">Surat Masuk</div>
                          </Link>
                        </button>{' '}
                      </li>
                    )}

                    {this.props.Path.currentPath == 'SuratKeluar' ? (
                      <li className="bg-brokenblack mb-5">
                        <button>
                          <img
                            className=" "
                            src="assets/img/icon/Surat-Active.png"
                          />
                          <div className="text-biru font-bold	">
                            Surat Keluar
                          </div>
                        </button>
                      </li>
                    ) : (
                      <li className="mb-5">
                        <button onClick={this.onLink6}>
                          <Link to="/SuratKeluar" replace>
                            <img
                              className=" "
                              src="assets/img/icon/Surat-Pasive.png"
                            />
                            <div className="text-primary">Surat Keluar</div>
                          </Link>
                        </button>
                      </li>
                    )}
                    {this.props.Path.currentPath == 'Disposisi' ? (
                      <li className="bg-brokenblack mb-5">
                        <button>
                          <img
                            className=" "
                            src="assets/img/icon/Surat-Active.png"
                          />
                          <div className="text-biru font-bold	">Disposisi</div>
                        </button>{' '}
                      </li>
                    ) : (
                      <li className="mb-5">
                        <button onClick={this.onLink7}>
                          <Link to="/Disposisi" replace>
                            <img
                              className=" "
                              src="assets/img/icon/Surat-Pasive.png"
                            />{' '}
                            <div className="text-primary">Disposisi</div>
                          </Link>
                        </button>
                      </li>
                    )}
                  </ul>
                </>
              )}
            </nav>
          </IconContext.Provider>
        </div>
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, { setPath })(Navbar)
