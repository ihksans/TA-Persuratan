import React, {Component} from 'react';
<<<<<<< HEAD
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

=======
import Login from '../../components/Login'
import Box from '../../components/Box'
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
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
<<<<<<< HEAD
            //html
            //js
            <>
            <p>Ini LandingPage</p>
            </>
        );
    }
}
=======
           
            <>
          
            <Login/>
            {/* <Box/> */}
            </>
            
        );
        
    }
}

>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
export default LandingPage;

