//component CreateUser
import axios from 'axios'
import React, { Component, useState } from 'react'
// import { removeTokenByID } from '../../actions'
// import { logoutAuth } from '../../service/auth'
import { connect } from 'react-redux'
import { NavItem } from 'reactstrap'

class pengguna extends Component{

    // const [data, setData] = useState([])
    render(){
    return(
        <>
            <form className="mt-8" action="#myForm" method="POST" onSubmit={this.props.handleSubmit}>
            {/* onSubmit={this.add} */}
                <div>
                    <div className="rounded-md shadow-sm">
                        <div>
                            <div htmlFor="name" className="text-sm mb-2" >Nama Pengguna</div>
                            <input
                                type="text"
                                name="nama"
                                value={this.props.name}
                                onChange={(event)=>this.props.hanndleChange(evet)}
                                id="name"
                                placeholder="Masukan Nama Pengguna"
                                className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                // aria-label="nama"
                                value={this.state.item.name}
                                onChange={this.handleChange}
                                />
                        </div>

                        <div>
                            <div htmlFor="username" className="text-sm mb-2 ">Username</div>
                            <input
                                type="text"
                                name="username"
                                value={this.props.username}
                                onChange={(event)=>this.props.hanndleChange(evet)}
                                id="username"
                                placeholder="Masukan Username"
                                className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                // aria-label="username"
                                value={this.state.item.username}
                                onChange={this.handleChange}
                                />
                        </div>

                        {/* <div>
                            <div htmlFor="role" className="text-sm mb-2 ">Role</div>
                            <input
                                type="text"
                                name="role"
                                id="role"
                                placeholder="Masukan Role"
                                className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                // aria-label="role"
                                value={this.state.item.role}
                                onChange={this.handleChange}
                                />
                        </div> */}

                        <div>
                            <div htmlFor="password" className="text-sm mb-2 ">Password</div>
                            <input
                                type="text"
                                name="password"
                                value={this.props.password}
                                onChange={(event)=>this.props.hanndleChange(evet)}
                                id="password"
                                placeholder="Masukan Password"
                                className="focus:form-control focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-2 mb-3"
                                // aria-label="password"
                                value={this.state.item.password}
                                onChange={this.handleChange}
                                />
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