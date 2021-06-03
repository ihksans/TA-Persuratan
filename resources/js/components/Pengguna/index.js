//component CreateUser
import { data } from 'autoprefixer'
import axios from 'axios'
import React, { Component, useState } from 'react'
import api from '../../service/api'
// import { removeTokenByID } from '../../actions'
// import { logoutAuth } from '../../service/auth'
import { connect } from 'react-redux'
import { NavItem, Row } from 'reactstrap'
import { getDataPengguna } from '../../service/pengguna'

class CreateUser extends Component {
  constructor(props) {
    super(props)
    this.state = {
      pengguna : [],
      // id : "",
      // nama : "",
      // username : "",
      // password : "",
      // msg: null,
      // type: null,
      // flash:false,
      // alert: null,
    }
    this.getPengguna = this.getPengguna.bind(this);
    this.deletePengguna = this.deletePengguna.bind(this);
  }
  hideAlert() {
    this.setState({
        alert: null
    });
  }

  componentDidMount(){
    this.getPengguna();
  }

  getPengguna(){
    api()
    .get('api/allPenggunaInfo')
    .then(response=>{
        this.setState({
            pengguna:response.data,
        });
        console.log('pengguna:'+ response.data)
      });
  }
  deletePengguna(id){
    api()
    .delete('api/deleteUser/${id}')
    .then(response=>{
      console.log('pengguna telah terhapus'+response.data)
    }).catch((error)=>{
      console.log(error)
    })
  }

//   edit(id){
//       let item=this.state.dir.filter(item = item.id === id)[0]
//       if(item){
//           this.setState({
//               isEditing:true,
//               item:item,
//               temp_id:item.id
//           })
//       }
//   }

//   delete(id){
//       axios.delete('/api/createuser/${id}')
//       .then(res=>this.fetchAll())
//   }

//   view(item){
//       alert(
//           `
//           name=${item.name}\n
//           // dll
//           `
//       )
//   }

// add(e){
//     e.preventDefault();
//     axios.post('/api/createuser', this.state.item)
//         .then(res => {
//             this.setState({
//                 item:{
//                     name:"",
//                     username1:"",
//                     // role:"",
//                     password1:"" 
//                     // confirmpassword: ""
//                 },
//             })
//             this.fetchAll();
//         });
//     // console.log("Pengguna telah dibuat")
// }
  

  render() {
    const {pengguna} = this.state
    return (
      <>
        <div classNname="mt-4">
        <button
                  type="submit"
                  className=" w-full border-2 rounded-md  bg-primary"
                  // onClick={this.handleSubmit}
                  data-target="#myForm"
                >
        <div className="text-sm mb-2 text-white	h-6">Tambah data</div>
        </button>
        </div>
        {/* <div className="col-md-6">
          <ul className="list-group">
          {
              this.props.dir.map(item =>(
                <li ClassName="list-group-item"> Test
              <span className="float-right">
                <button
                  className="rounded-md  bg-primary mr-2"
                >
                  Edit
                </button>
                <button
                  className="rounded-md  bg-brokenblack mr-2"
                >
                  Hapus
                </button>
              </span>
            </li>
              ))
            }
          </ul>
          
        </div> */}
        <table>
        <div className="mt-12">
          <table  class="border-collapse border border-gray-800">
          <thead>
            <tr class="border border-gray-600 ...">
              {/* <th class="border border-gray-600 ...">No</th>
              <th class="border border-gray-600">Nama Pengguna</th>
              <th class="border border-gray-600">Username</th>
              <th class="border border-gray-600">Password</th>
              <th class="border border-gray-600">Role</th>
              <th class="border border-gray-600">Aksi</th> */}
              <th scope="row">No</th>
              <th scope="row">Nama Pengguna</th>
              <th scope="row">Username</th>
              <th scope="row">Password</th>
              <th scope="row">Role</th>
              <th scope="row">Aksi</th>

            </tr>
          </thead>
          <tbody>
            {pengguna.map((pengguna, i)=>(
            <tr key={i}>
              <td scope="row">{i+1}</td>
              <td scope="row">{pengguna.NAMA}</td>
              <td scope="row">{pengguna.USERNAME}</td>
              <td scope="row">*******</td>
              <td scope="row">{pengguna.ROLE == 1 ? 'Administrator':'Pengguna'}</td>
              <td scope="row">
                <button
                  size="sm"
                  type="submit"
                  className=" w-full border-2 rounded-md  bg-primary"
                  // onClick={e=>this.props.edit(item.id,e)}
                >
                  <div className="text-sm mb-2 text-white	h-6">Edit</div>
                </button>
                <button
                  size="sm"
                  type="submit"
                  className=" w-full border-2 rounded-md  bg-brokenblack"
                  onClick={()=>this.deletePengguna(pengguna.id)}
                >
                  <div className="text-sm mb-2 text-white	h-6">Hapus</div>
                </button>
              </td>
            </tr>
            ))}
          </tbody>
          </table>
        </div>
        </table>
        
        
      </>
    )
  }
}

// function mapStateToProps(state) {
//   return state
// }
export default CreateUser

// if(document.getElementById('')){
//   ReactDOM.render(<index />, document.getElementById(''));
// }