//Template for Paging

import React, {Component} from 'react'
<<<<<<< HEAD
import {BrowserRouter, Link, Switch, Route, HashRouter} from 'react-router-dom';
=======
import {BrowserRouter as Router, Link, Switch, Route, HashRouter} from 'react-router-dom';
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
import Main from './Router';
import Footer from './components/Footer/FooterComponent'
import Header from './components/Header/HeaderComponent'

class Application extends Component {
    constructor(){
        super();
        this.state = {
          
        };
    }

    componentDidMount(){
       
    }

    render() {
        return (
            <div>
                <HashRouter>
<<<<<<< HEAD
                    <Header />
                    <Route default component={Main}/>
                    <Footer />  
=======
                    {/* <Header /> */}
                    <Route default component={Main}/>
                    {/* <Footer />   */}
>>>>>>> df208185cd36890a2f09032b2b97ea90ca9e0394
                </HashRouter>
            </div>
        );
    }
}

export default Application;