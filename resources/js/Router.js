//Routing Path Page

import React, { Component } from 'react'
import { Switch, Route, Router } from 'react-router-dom'
import LandingPage from './view/Page/LandingPage'
import Abouth from './view/Page/Abouth'
import MainDashboardPage from './view/Page/MainDashboardPage'
import AdminPage from './view/Page/AdminPage'
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
              <PrivateRoute exact path="/" component={MainDashboardPage} />
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
