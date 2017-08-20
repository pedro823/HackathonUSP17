import React, { Component } from 'react';
import {Card, CardTitle, Col} from 'react-materialize'
import logo from './logo.svg';
import Header from './Header.js'
//import Card from './Card.js';

class App extends Component {
  render() {
    return (
      <div className="App">
        <Header/>
        <p className="App-intro">
          Intro
        </p>
        <Card header={<CardTitle reveal image={"img/office.jpg"} waves='light'/>}
            title="Card Title"
            reveal={<p>Here is some more information about this product that is only revealed once clicked on.</p>}>
            <p><a href="#">This is a link</a></p>
        </Card>

      </div>
    );
  }
}


export default App;
