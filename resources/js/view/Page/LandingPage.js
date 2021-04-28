import React, {Component} from 'react';
import Login from '../../components/Login'
import Box from '../../components/Box'
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
            {/* <Box/> */}
            </>
            
        );
        
    }
}

export default LandingPage;

