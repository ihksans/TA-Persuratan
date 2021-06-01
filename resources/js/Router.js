//Routing Path Page

import React, { Component } from 'react'
import { Switch, Route, Router } from 'react-router-dom'
import LandingPage from './view/Page/LandingPage'
import Abouth from './view/Page/Abouth'
import MainDashboardPage from './view/Page/MainDashboardPage'
import AdminPage from './view/Page/AdminPage'
import Dashboard from './view/Page/Dashboard'
import DashboardAdmin from './view/Page/DashboardAdmin'
import KelolaPengguna from './view/Page/KelolaPengguna'
import KelolaSurat from './view/Page/KelolaSurat'
import SuratKeluar from './view/Page/SuratKeluar'
import SuratMasuk from './view/Page/SuratMasuk'
import Disposisi from './view/Page/Disposisi'

import { PrivateRoute } from './PrivateRoot'
import { connect } from 'react-redux'
import Cookies from 'js-cookie'
class Main extends Component {
  render() {
    // console.log("token ku:"+ this.props.authToken.token)
    return (
      <>
        <Switch>
          {/* List of path page */}
          <Route exact path="/Login" component={LandingPage} />
          <Route exact path="/Abouth" component={Abouth} />
          {Cookies.get('cake') == this.props.authToken.token ? (
            <>
              {' '}
              <PrivateRoute exact path="/" component={DashboardAdmin} />
              <PrivateRoute exact path="/KelolaSurat" component={KelolaSurat} />
              <PrivateRoute
                exact
                path="/KelolaPengguna"
                component={KelolaPengguna}
              />
              <PrivateRoute exact path="/Dashboard" component={Dashboard} />
              <PrivateRoute
                exact
                path="/DashboardAdmin"
                component={DashboardAdmin}
              />
              <PrivateRoute exact path="/SuratMasuk" component={SuratMasuk} />
              <PrivateRoute exact path="/SuratKeluar" component={SuratKeluar} />
              <PrivateRoute exact path="/Disposisi" component={Disposisi} />
              <PrivateRoute
                exact
                path="/AdminPage"
                component={AdminPage}
              />{' '}
            </>
          ) : (
            <>
              {' '}
              <Route exact path="/" component={LandingPage} />{' '}
            </>
          )}
        </Switch>
      </>
    )
  }
}

function mapStateToProps(state) {
  return state
}
export default connect(mapStateToProps, null)(Main)
