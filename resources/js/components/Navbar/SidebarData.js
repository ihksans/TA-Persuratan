import React from 'react'
import * as FaIcons from 'react-icons/fa'
import * as AiIcons from 'react-icons/ai'
import * as IoIcons from 'react-icons/io'

export const SidebarData = [
  {
    title: 'Beranda',
    path: '/',
    icon: <img className=" " src="assets/img/icon/Beranda-Active.png" />,
    icon2: <img className="  " src="assets/img/icon/Beranda-Pasive.png" />,
    cName: 'nav-text',
    kode: '1',
  },
  {
    title: 'Kelola Surat',
    path: '/KelolaSurat',
    icon: <img className=" " src="assets/img/icon/Surat-Active.png" />,
    icon2: <img className=" " src="assets/img/icon/Surat-Pasive.png" />,
    cName: 'nav-text',
    kode: '2',
  },
  {
    title: 'Kelola Pengguna',
    path: '/KelolaPengguna',
    icon: <img className="  " src="assets/img/icon/User-Active.png" />,
    icon2: <img className="  " src="assets/img/icon/User-Pasive.png" />,
    cName: 'nav-text',
    kode: '3',
  },
]
