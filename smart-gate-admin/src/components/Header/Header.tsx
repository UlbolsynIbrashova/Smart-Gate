import React from "react";
import './styles.scss';

const Header: React.FC = () => {
  return (
    <div className="header">
      <img src="/images/logo.png" alt="logo" />
      <div>RU <img src="/images/arrow-down.svg" className="ml-1" alt="" /></div>
    </div>
  );
};

export default Header;
