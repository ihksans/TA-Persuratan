//Template for Paging

import React, {Component} from 'react'
import {BrowserRouter as Router, Link, Switch, Route, HashRouter} from 'react-router-dom';
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
                    {/* <Header /> */}
                    <Route default component={Main}/>
                    {/* <Footer />   */}
                </HashRouter>
            </div>
        );
    }
}

export default Application;