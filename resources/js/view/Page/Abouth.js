import React, {Component} from 'react';
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

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
            //html
            //js
            <>
<<<<<<< HEAD
            <p>Ini Page Abouth</p>
=======
              <div className="App">
                  <h1 className='text-red-500'>hello</h1>
              </div>       
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
            </>
        );
    }
}
export default LandingPage;

