import React, { Component } from 'react'
import Logout from '../../components/Logout'
//Ini buat dependecies/library nya
//import + "nama variabel" + from + "nama librarynya";
import { connect } from 'react-redux'
import Cookies from 'js-cookie'
class DashboardAdmin extends Component {
  //deklarasi variabel
  constructor(props) {
    super()
    this.state = {}
  }

  render() {
    // console.log("tokenq"+ this.props.authToken.token)
    return (
      //html
      //js
      <>
        <div className="w-full h-90% bg-gray-200	">
          <p>Ini Main Dashboard Page </p>
          <p>token: {this.props.authToken.token}</p>
          {Cookies.get('cake') == this.props.authToken.token ? (
            <>
              <p>True</p>
            </>
          ) : (
            <>
              <p>False</p>
            </>
          )}
          <Logout />
        </div>
      </>
    )
  }
}
function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, null)(DashboardAdmin)
