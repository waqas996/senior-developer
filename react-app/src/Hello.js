import React, {Component} from 'react';
import './Hello.css';


/*class Hello extends Component{
    render() {
        return (
            <div>
                <h1 className='f1 tc'>Hello World</h1>
                <p>This is a React App</p>
                <p>{this.props.greeting}</p>
            </div>

        );
    }
}*/

const Hello = (props) => {
    return (
        <div>
            <h1 className='f1 tc'>Hello World</h1>
            <p>This is a React App</p>
            <p>{props.greeting}</p>
        </div>
    )
}

export default Hello;