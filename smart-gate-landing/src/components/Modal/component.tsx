import React from "react";
import {Props} from "./props";
import './styles.scss';
import Button from "../Button/component";

const Modal: React.FC<Props> = ({ title, subTitle, imageName, descriptions, buttonLabel, onCLose }) => {
  return (
    <div className="modal-container">
      <div className="modal-block">
        <img onClick={onCLose} className="close-icon" src="images/close.svg" alt="close icon" />
        <div className="modal-block__header">
          <div className="image-container">
            <img src={`images/${imageName}`} alt={imageName} />
          </div>
        </div>
        <div className="modal-block__body">
          <div className="mb-5">
            <h3>{title}</h3>
            {subTitle && <p className="text-default my-3">{subTitle}</p>}
            {descriptions.map((desc, i) => (
              <div key={i} className="border-green">
                <h3 className="mb-3">{desc.label}</h3>
                <p className="text-default">{desc.content}</p>
              </div>
            ))}
          </div>
          <div className="text-center">
            {buttonLabel && (<Button variant="outlined">{buttonLabel}</Button>)}
          </div>
        </div>
      </div>
    </div>
  )
};

export default Modal;
