import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

class FujisuUser extends Component{
    constructor(props) {
        super(props)
    
        this.state = {
             fujisu : []
        }
        // console.log(super());
    }
    
    componentWillMount(){
        axios.get('/api/fujisu-user').then(response =>{
            this.setState({
                fujisu : response.data
            }).catch(errors =>{
                console.log(errors);
            })
        })
    }

    render(){
        return (
            <div className="container">
                {this.state.fujisu.map(fujisu => <li> {fujisu.name} </li>)}
            </div>
        );
    }
}

export default FujisuUser;

if (document.getElementById('FujisuUser')) {
    ReactDOM.render(<FujisuUser />, document.getElementById('FujisuUser'));
}
