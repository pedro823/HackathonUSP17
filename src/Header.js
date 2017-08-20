import React from 'react';
import './header.css';

class Header extends React.Component {

  constructor(){
      super();
  }
  render() {
    return (
      <div className="header">
          
          <div className = "topBar"></div>
          <div className="header-title"><img src="./icon.png"/>{this.props.title}</div>
      </div>
    );
  }
}


export default Header;
