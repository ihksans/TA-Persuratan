import React, {Component} from 'react';
import { render } from 'react-dom';
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

class ClassExample extends Component {
    //deklarasi variabel
    constructor(props){
        super();
        this.state ={
            a : ""
        };
    }
    //contoh method
    isiVarA (){
        this.setState({
            a: "aku"
        });
    }
    render(){
        return(
            <>
            <p>Ini Class Komponen</p>
            </>
        )
    }
}
export default ClassExample;

