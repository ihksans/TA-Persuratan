import React from 'react';
import {Redirect, Route} from "react-router-dom";
import {cekLog} from './service/token'
import Cookies from 'js-cookie'
export const PrivateRoute = ({component:Component, ...rest})=>(

    <Route 
    {...rest}
    render={props =>
        Cookies.get('cake')?(
         <Component {...props}/>
     ):(
     <Redirect
     to={{
         pathname:"/",
         state:{ from:props.location}
     }}
     />
     )
    }
    />
);