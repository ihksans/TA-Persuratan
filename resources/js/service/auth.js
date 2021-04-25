import { Redirect } from 'react-router-dom';
import api from './api'
import {logIn, logOut, notLoggedIn} from './token'

export const loginAuth = (props) =>{
    api().get('/sanctum/csrf-cookie').then(() => {
        api().post('api/login', props).then(response => {
            if (response.data.error) {
                console.log(response.data.error)
                notLoggedIn;

            } else {
                logIn(response.data.content.access_token);
                window.location.assign("/#/MainDashboard")

            }
        })
    })
    
}

export const logoutAuth = () =>{
        api().post('api/logout').then(response => {
            if (response.data.error) {
                console.log(response.data.error)
                console.log("error login")
            } else {
                logOut();
                window.location.assign("/")
            }
        })  
}