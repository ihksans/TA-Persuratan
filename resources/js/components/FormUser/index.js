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
            nama:"",
            username:"",
            role:"",
            password:"" 
        }

        this.handleInputNama = this.handleInputNama.bind(this)
        this.handleInputUsername = this.handleInputUsername.bind(this)
        this.handleInputRole = this.handleInputRole.bind(this)
        this.handleInputPassword = this.handleInputPassword.bind(this)
        this.onSubmit = this.onSubmit.bind(this)
    }
    //handle input changes and update item state
    
    handleInputNama(e){
        let value = e.target.value
        this.setState({
            nama: value
        })
    }
    handleInputUsername(e){
        let value = e.target.value
        this.setState({username: value})
    }
    handleInputRole(e){
        let value = e.target.value
        this.setState({role: value})
    }
    handleInputPassword(e){
        let value = e.target.value
        this.setState({password: value})
    }

    onSubmit(e){
        e.preventDefault()
        console.log('nama final : '+ this.state.nama)
        console.log('username final : '+this.state.username)
        console.log('password final : '+this.state.password)
        console.log('role final:'+this.state.role)
        api()
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
        }).catch(err=>console.log(err));
    }
    render(){
        return(
            <>
                <form className="mt-8" action="#" method="POST" onSubmit={this.onSubmit}>
                    <div>
                        <div className="rounded-md shadow-sm">
                            <div>
                                <div htmlFor="nama" className="text-sm mb-2" >Nama Pengguna</div>
                                <input
                                    type="text"
                                    name="nama"
                                    required
                                    id="nama"
                                    placeholder="Masukan Nama Pengguna"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.nama}
                                    onChange={this.handleInputNama}
                                    />
                            </div>

                            <div>
                                    <div htmlFor="username" className="text-sm mb-2" >Username</div>
                                    <input
                                    type="text"
                                    name="username"
                                    required
                                    id="username"
                                    placeholder="Masukan Username"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.username}
                                    onChange={this.handleInputUsername}
                                    />
                            </div>

                            <div>
                                <div htmlFor="role" className="text-sm mb-2" >Role</div>
                                    <select
                                    type="text"
                                    name="role"
                                    required
                                    id="role"
                                    placeholder="Masukan Role"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.role}
                                    onChange={this.handleInputRole}
                                    >
                                        <option >Pengguna sebagai ...</option>
                                        <option value="1">Administrator</option>
                                        <option value="2">Pengguna</option>
                                    </select>
                            </div>

                            <div>
                                <div htmlFor="password" className="text-sm mb-2" >Password</div>
                                    <input
                                    type="password"
                                    name="password"
                                    required
                                    id="password"
                                    placeholder="Masukan Password"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.password}
                                    onChange={this.handleInputPassword}
                                />
                            </div>
                            <div>
                                <div htmlFor="password" className="text-sm mb-2" >Connfirm Password</div>
                                    <input
                                    type="password"
                                    name="password"
                                    required
                                    id="password"
                                    placeholder="Masukan Password"
                                    className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                    value={this.state.password}
                                    onChange={this.handleInputPassword}
                                />
                            </div>

                            <div className="flex ">
                                <button
                                type="submit"
                                className=" w-full border-2 rounded-md  bg-primary"
                                onClick={this.onSubmit}
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
