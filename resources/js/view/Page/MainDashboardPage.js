import React, {Component} from 'react';
import Logout from '../../components/Logout';
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

class MainDashboardPage extends React.Component {
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
            //html
            //js
            <>
            <p>Ini Main Dashboard Page </p>
            <Logout/>
            </>
        );
    }
}
export default MainDashboardPage;

