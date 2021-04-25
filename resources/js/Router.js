//Routing Path Page

import React,{Component} from 'react'
import { Switch, Route } from "react-router-dom";
import LandingPage from './view/Page/LandingPage';
import Abouth from './view/Page/Abouth';
import MainDashboardPage from './view/Page/MainDashboardPage';
import AdminPage from './view/Page/AdminPage';
import { PrivateRoute } from './PrivateRoot';

export default class Main extends Component {
    constructor(props){
        super(props);
        this.state = {value:""}
    }
    render(){
        return(
            <Switch>
            {/* List of path page */}
            <Route exact path="/" component={LandingPage}/> 
            <Route exact path="/Abouth" component={Abouth}/> 
            <PrivateRoute exact path="/MainDashboard" component={MainDashboardPage}/> 
            <PrivateRoute exact path="/AdminPage" component={AdminPage}/> 
            </Switch>
        )
    }
}
   