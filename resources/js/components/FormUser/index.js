import axios from 'axios'
import api from '../../service/api'
import React, { Component, useState } from 'react'
import { connect } from 'react-redux'
// import createuser from "./index";
import Pengguna from '../../components/Pengguna'
class Form extends Component{
    constructor(props){
        super(props)
        this.state={
            dir:[],
            item:{
                nama:"",
                username:"",
                role:"",
                password:"" 
                // confirmpassword: ""
            }
            // isEditing: false,
            // temp_id: null
        }
        // this.handleChange = this.handleChange.bind(this)
        // this.add = this.add.bind(this)
        // this.fetchAll = this.fetchAll.bind(this)
        // this.delete = this.delete.bind(this)
        // this.edit = this.edit.bind(this)

        this.handleInputChange = this.handleInputChange.bind(this)
        this.handleInputUsername = this.handleInputUsername.bind(this)
        this.handleInputRole = this.handleInputRole.bind(this)
        this.handleInputPassword = this.handleInputPassword.bind(this)
        this.onSubmit = this.onSubmit.bind(this)
        // this.handleInput=this.handleInput.bind(this)
    }
    //handle input changes and update item state
    
    handleInputChange(e){
        this.setState({
            nama: e.target.value
        })
        console.log(this.state.nama);
    }
    handleInputUsername(e){
        this.setState({username: e.target.value})
        console.log(this.state.username);
    }
    handleInputRole(e){
        this.setState({role: e.target.value})
        console.log(this.state.role);
    }
    handleInputPassword(e){
        this.setState({password: e.target.value})
        console.log(this.state.password);
    }

    onSubmit(e){
        e.preventDefault()
        // const PenggunaObject ={
        //     name: this.state.name,
        //     username: this.state.username,
        //     role: this.state.role,
        //     password: this.state.password
        // }; 
        api()
        // .post('api/createUser', PenggunaObject)
        .post('api/createUser', {
            NAMA: this.state.nama,
            USERNAME: this.state.username,
            ROLE: this.state.role,
            PASSWORD: this.state.password
        })
        .then(response => {
            this.setState({
                item:{
                    nama:"",
                    username:"",
                    role:"",
                    password:"" 
                },
            })
            // this.props.history.push('/');
        }).catch(err=>console.log(err));
    }
    
    render(){

        return(
            <>
                <form className="mt-8" action="#myForm" method="POST" onSubmit={this.onSubmit}>
                    <div>
                        <div className="rounded-md shadow-sm">
                            <div>
                                <div htmlFor="nama" className="text-sm mb-2" >Nama Pengguna</div>
                                <input
                                    type="text"
                                    name="nama"
                                    // value={this.props.name}
                                    // onChange={(event)=>this.props.hanndleChange(evet)}
                                    id="nama"
                                    placeholder="Masukan Nama Pengguna"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.nama}
                                    onChange={this.handleInputChange}
                                    // onChange={this.handleInput}
                                    />
                            </div>

                            <div>
                                {/* <div htmlFor="username" className="text-sm mb-2 ">Username</div>
                                <input
                                    type="text"
                                    name="username"
                                    // value={this.props.username}
                                    // onChange={(event)=>this.props.hanndleChange(evet)}
                                    id="username"
                                    placeholder="Masukan Username"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.item.username}
                                    onChange={this.handleInputUsername}
                                    // onChange={this.handleInput}
                                    /> */}
                                    <div htmlFor="username" className="text-sm mb-2" >Username</div>
                                    <input
                                    type="text"
                                    name="username"
                                    // value={this.props.name}
                                    // onChange={(event)=>this.props.hanndleChange(evet)}
                                    id="username"
                                    placeholder="Masukan Username"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.username}
                                    onChange={this.handleInputUsername}
                                    // onChange={this.handleInput}
                                    />
                            </div>

                            <div>
                                <div htmlFor="role" className="text-sm mb-2" >Role</div>
                                    <select
                                    type="text"
                                    name="role"
                                    // value={this.props.name}
                                    // onChange={(event)=>this.props.hanndleChange(evet)}
                                    id="role"
                                    placeholder="Masukan Role"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.role}
                                    onChange={this.handleInputRole}
                                    // onChange={this.handleInput}
                                    >
                                        <option value="1">Administrator</option>
                                        <option value="2">Pengguna</option>
                                    </select>
                                
                                
                                {/* <div htmlFor="role" className="text-sm mb-2 ">Role</div>
                                <select 
                                type="text"
                                name="role"
                                id="role"
                                placeholder="Masukan Role"
                                className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                value={this.state.item.role}
                                onChange={this.handleInputRole}
                                // onChange={this.handleInput}
                                >
                                    <option value="1">Administrator</option>
                                    <option value="2">Pengguna</option>
                                </select> */}
                            </div>

                            <div>
                                <div htmlFor="password" className="text-sm mb-2" >Password</div>
                                    <input
                                    type="text"
                                    name="password"
                                    // value={this.props.name}
                                    // onChange={(event)=>this.props.hanndleChange(evet)}
                                    id="password"
                                    placeholder="Masukan Password"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.password}
                                    onChange={this.handleInputPassword}
                                    // onChange={this.handleInput}
                                />
                                {/* <div htmlFor="password" className="text-sm mb-2 ">Password</div>
                                <input
                                    type="text"
                                    name="password"
                                    // value={this.props.password}
                                    // onChange={(event)=>this.props.hanndleChange(evet)}
                                    id="password"
                                    placeholder="Masukan Password"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    // aria-label="password"
                                    value={this.state.item.password}
                                    onChange={this.handleInputPassword}
                                    // onChange={this.handleInput}
                                    /> */}
                            </div>

                            {/* <div>
                                <div htmlFor="confirmpassword" className="text-sm mb-2">Confirm Password</div>
                                <input
                                    type="text"
                                    name="confirmpassword"
                                    id="confirmpassword"
                                    placeholder="Confirmasi Password"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    // aria-label="confirmpassword"
                                    value={this.state.item.confirmpassword}
                                    onChange={this.handleChange}
                                    />
                            </div> */}

                            <div className="flex ">
                                <button
                                type="submit"
                                className=" w-full border-2 rounded-md  bg-primary"
                                // onClick={this.handleSubmit}
                                value="Add Pengguna"
                                >
                                <div className="text-sm mb-2 text-white	h-6">Tambah data User</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                {/* <createuser 
                    dir={this.state.dir}
                    delete={this.delete}
                    edit={this.edit}
                    view={this.view}
                /> */}
            </>
            
        );
    }
}
export default Form
