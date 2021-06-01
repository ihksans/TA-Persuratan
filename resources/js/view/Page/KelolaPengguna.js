import React, { Component } from 'react'
// import { Button } from 'reactstrap'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import CreateUser from '../../components/CreateUser'
import Form from '../../components/Form'

class KelolaPengguna extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    // this.state = {}
  }
  render() {
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200	">
          <p>Kelola pengguna</p>
          <p>Ini untuk create user</p>
          <CreateUser 
          />
          {/* dir={this.state.dir} */}
          <Form />
          {/* <Form {...this.state} handleChannge={this.handleChannge} handleSubmit={this.handleSubmit}/> */}
        </div>
      </>
    )
  }
}
export default KelolaPengguna
