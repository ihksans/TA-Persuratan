import React, {Component} from 'react';
<<<<<<< HEAD
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";

class MainDashboardPage extends React.Component {
=======
import Logout from '../../components/Logout';
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import { connect } from 'react-redux';
import Cookies from 'js-cookie';
class MainDashboardPage extends Component {
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
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
<<<<<<< HEAD
=======
        // console.log("tokenq"+ this.props.authToken.token)
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
        return(
            //html
            //js
            <>
            <p>Ini Main Dashboard Page </p>
<<<<<<< HEAD
=======
            <p>token: { this.props.authToken.token}</p>
            {Cookies.get('cake') == this.props.authToken.token ?(<><p>True</p></>):(<><p>False</p></>)}
            <Logout/>
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
            </>
        );
    }
}
<<<<<<< HEAD
export default MainDashboardPage;

=======
function mapStateToProps(state) {
    return state;
  }
export default connect(mapStateToProps, null)(MainDashboardPage);
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
