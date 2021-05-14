import React from "react";
import {Props} from "./props";
import './styles.scss';

const Button: React.FC<Props> = ({ variant, children, fill, onClick }) => {
  return (
    <button onClick={onClick} className={'button' + (variant === 'outlined' ? ' button-outlined' : ' button-contained') + (fill ? ' fill' : '')}>
      {children}
    </button>
  )
};

export default Button;
