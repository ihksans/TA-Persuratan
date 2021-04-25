import React, {Component} from 'react';
import Login from '../../components/Login'
class LandingPage extends React.Component {
    //deklarasi variabel
    constructor(props){
        super();
        this.state ={
            a : "",
            b:"1234"
        };
    }
    //contoh method
    isiVarA (){
        this.setState({
            a: "aku"
        });
    }
    tambahVarB(){

    }
    render(){
        return(
           
            <>
          
            <Login/>
            </>
            
        );
        
    }
}

export default LandingPage;

