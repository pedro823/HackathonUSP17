import React, { Component } from 'react';
import {Card, CardTitle, Col} from 'react-materialize'
import logo from './logo.svg';
import Header from './Header.js'
import './App.css';

class App extends Component {
  render() {
    return (
      <div className="App">
        <Header title="IC Shortcut"/>
        <div className="content">
            <div className="content-container">
            <p className="App-intro">
              Intro
            </p>

            </div>
            <div className="filter-container">
              <div>
                

              </div>
            </div>
        </div>
      </div>
    );
  }
}


export default App;
