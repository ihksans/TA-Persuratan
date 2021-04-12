//Routing Path Page

import React from 'react'
import { Switch, Route } from "react-router-dom";
import LandingPage from './view/Page/LandingPage';
import Abouth from './view/Page/Abouth';
import MainDashboardPage from './view/Page/MainDashboardPage';
import AdminPage from './view/Page/AdminPage';

const Main = props =>(
    <Switch>
        {/* List of path page */}
        <Route exact path="/" component={LandingPage}/> 
        <Route exact path="/Abouth" component={Abouth}/> 
        <Route exact path="/MainDashboard" component={MainDashboardPage}/> 
        <Route exact path="/AdminPage" component={AdminPage}/> 
    </Switch>
)
export default Main;