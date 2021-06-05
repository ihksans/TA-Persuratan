import React from 'react'
import { Redirect, Route } from 'react-router-dom'
import Cookies from 'js-cookie'
import Footer from './components/Footer'
import Header from './components/Header/HeaderComponent'
import Navbar from './components/Navbar'
export const PrivateRoute = ({ component: Component, ...rest }) => (
  <Route
    {...rest}
    render={(props) =>
      Cookies.get('cake') ? (
        <>
          <div className="flex flex-row">
            <Navbar />
            <div className="w-full">
              <Header />
              <Component {...props} />
              <Footer />
            </div>
          </div>
        </>
      ) : (
        <Redirect
          to={{
            pathname: '/Login',
            state: { from: props.location },
          }}
        />
      )
    }
  />
)
