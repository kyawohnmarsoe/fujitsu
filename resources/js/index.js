import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';
import Example from './components/Example';
import FujisuUser from './components/FujisuUser';

class Index extends Component{
    render(){
        return (
            <div className="container">
               <Router>
                  <div>
                      <Link to="/">Home</Link>
                      <Link to="/fujisu">Fujisu</Link>
                      <Route path="/" component={Example} />
                      <Route path="/fujisu" component={FujisuUser} />
                  </div>
               </Router>
            </div>
        );
    }
}

export default Index;

if (document.getElementById('Index')) {
    ReactDOM.render(<Index />, document.getElementById('Index'));
}
