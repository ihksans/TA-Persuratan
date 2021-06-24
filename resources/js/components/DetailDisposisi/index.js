import axios from 'axios'
import api from '../../service/api'
import React, {Component, useState} from 'react'
import {connect} from 'react-redux'
import PdfReader from '../PdfReader'

class DetailDisposisi extends Component{
    constructor(props){
        super(props)
        this.state={

        }
        this.handleModal = this.handleModal.bind(this)
        this.onSubmit = this.onSubmit.bind(this)
    }
    handleModal(){
        this.setState({
            showModal: !this.state.showModal,
        })
    }
    onSubmit(e){
        e.preventDefault()
    }

    render(){
        return(
            <>
                <button
                type="submit"
                className="bg-primary font-bold  self-center ml-2 mt-1  rounded p-1 shadow-sm w-50%"
                onClick={this.handleModal}
                >
                    Lihat Detail
                </button>
                {this.state.showModal?(
                    <>
                        <button
                type="submit"
                className="bg-primary font-bold  self-center ml-2 mt-1  rounded p-1 shadow-sm w-75%"
                onClick={this.handleModal}
                >
                    Detail
                </button>
                    </>
                ):null}
            </>
        )
    }
}
export default DetailDisposisi