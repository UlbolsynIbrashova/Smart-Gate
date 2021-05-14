import React from "react";
import "../Modal/styles.scss";
import "./styles.scss";
import Button from "../Button/component";
import {Props} from "./props";


const ConsultModal: React.FC<Props> = ({ onClose }) => {
  return (
    <div className="modal-container">
      <div className="consult-modal">
        <img onClick={onClose} className="close-icon" src="images/close-green.svg" alt="close" />
        <h3 className="text-center mb-3">Бесплатное консультирование</h3>
        <p className="text-small mb-2">Оставьте свои данные и мы свяжемся с вами в ближайшее время</p>
        <input className="mb-4" type="text" placeholder="Введите имя" />
        <input className="mb-4" type="text" placeholder="+7 (___)-___-__-__" />
        <Button fill variant="contained">Оставить заявку</Button>
        <p className="text-xsmall text-center mt-4">Ваши данные не будут переданы третьим лицам</p>
      </div>
    </div>
  );
};

export default ConsultModal;
