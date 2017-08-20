import React from 'react';
import './header.css';

class Header extends React.Component {

  constructor(){
      super();
  }
  render() {
    return (
      <div className="header">
          <div className="header-title">{this.props.title}</div>
      </div>
    );
  }
}


export default Header;
