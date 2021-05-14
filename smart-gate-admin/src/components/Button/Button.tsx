import React from "react";
import './styles.scss';

const Button: React.FC<{ readonly onClick?: () => void }> = ({ children, onClick }) => {
  return (
    <button onClick={onClick}>{children}</button>
  );
};

export default Button;
