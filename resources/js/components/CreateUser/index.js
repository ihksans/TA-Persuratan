//component CreateUser
import axios from 'axios'
import React, { Component, useState } from 'react'
// import { removeTokenByID } from '../../actions'
// import { logoutAuth } from '../../service/auth'
import { connect } from 'react-redux'
import { NavItem } from 'reactstrap'

class CreateUser extends Component {
  constructor(props) {
    super(props)
    this.state = {
      pengguna : [],
      id : "",
      nama : "",
      username : "",
      password : "",
      
    }
  }

  // handleChange = (event)=>{
  //   this.setState({
  //     [event.target.name] : event.target.value
  //   })
  // }

  // handleSubmit=(event)=>{
  //   event.preventDefault();

  //   console.log("Data : ",this.state);
  // }


  fetchAll(){
    axios.get('/api/createuser')
        .then(res => {
            this.state(
                {
                    dir:res.data
                }
            )
            // console.log(res);
        });
        console.log(this.state.dir);
  }

  

  render() {

    return (
      <>
        {/* <p>{this.props.authToken.token}</p> */}
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
              <th class="border border-gray-600 ...">No</th>
              <th class="border border-gray-600">Nama Pengguna</th>
              <th class="border border-gray-600">Username</th>
              <th class="border border-gray-600">Password</th>
              <th class="border border-gray-600">Role</th>
              <th class="border border-gray-600">Aksi</th>
            </tr>
          </thead>
          <tbody>
            {/* @foreach($pengguna as $data)
            @endforeach */}
            <tr class="border border-gray-600">
              {/* <th class="border border-gray-600"key={item.id}>{item.id}</th> */}
              <th class="border border-gray-600">$id</th>
              {/* <th class="border border-gray-600">{{$data->nama}}</th> */}
              <th class="border border-gray-600">$name</th>
              <th class="border border-gray-600">$Username</th>
              <th class="border border-gray-600">$Password</th>
              <th class="border border-gray-600">$Role</th>
              <th class="border border-gray-600">
                <div className="flex ">
                <button
                  type="submit"
                  className=" w-full border-2 rounded-md  bg-primary"
                  onClick={e=>this.props.view(item,e)}
                  // onClick={this.handleSubmit}
                  >
                  <div className="text-sm mb-2 text-white	h-6">View</div>
                  </button>
                  <button
                  type="submit"
                  className=" w-full border-2 rounded-md  bg-primary"
                  onClick={e=>this.props.edit(item.id,e)}
                  // onClick={this.handleSubmit}
                  >
                  <div className="text-sm mb-2 text-white	h-6">Edit</div>
                  </button>
                  <button
                  type="submit"
                  className=" w-full border-2 rounded-md  bg-brokenblack"
                  // onClick={this.handleSubmit}
                  // onClick={(e)=>this.props.delete(item.id, e)}
                  >
                  <div className="text-sm mb-2 text-white	h-6">Hapus</div>
                  </button>
                </div>
                <div className="flex ">
                  {/* <button
                  type="submit"
                  className=" w-full border-2 rounded-md  bg-primary"
                  // onClick={this.handleSubmit}
                  >
                  <div className="text-sm mb-2 text-white	h-6">Tambah data User</div>
                  </button> */}
                </div>
              </th>
            </tr>
          </tbody>
            {/* {
              this.props.dir.map(item =>(
                
              ));
            } */}
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