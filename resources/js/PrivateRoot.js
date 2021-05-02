import React from 'react';
import {Redirect, Route} from "react-router-dom";
import Cookies from 'js-cookie';

export const PrivateRoute = ({component:Component,key, ...rest})=>(

    <Route 
    {...rest}
    render={props =>
    Cookies.get('cake')?(
        <Component {...props}/>
    ):(
        <Redirect
        to={{
            pathname:"/Login",
            state:{ from:props.location}
        }}
        />
    )
     }
    />
);
