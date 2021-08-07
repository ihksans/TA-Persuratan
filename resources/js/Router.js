//Routing Path Page

import React, { Component } from 'react'
import { Switch, Route, Router } from 'react-router-dom'
import HomePage from './HomePage'
class Main extends Component {
  constructor(props) {
    super()
    this.state = {
      login: false,
    }
  }

  render() {
    return (
      <>
        <Switch>
          <Route exact path="/" component={HomePage} />
        </Switch>
      </>
    )
  }
}

export default Main
