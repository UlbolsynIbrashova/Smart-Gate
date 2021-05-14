import React, {useState} from "react";
import {Props} from "./props";
import './styles.scss';

const QABlcok: React.FC<Props> = ({ question, answers }) => {
  const [answersHidden, setAnswersHidden] = useState<boolean>(true);

  return (
    <div>
      <div onClick={() => setAnswersHidden(!answersHidden)} className="qa-container py-3 d-flex align-items-center justify-content-between">
        <p>{question}</p>
        <img className={'arrow-down' + (!answersHidden ? ' rotate' : '')} src="images/arrow-down.svg" alt="arrow-down" />
      </div>
      <div className={'answers' + (answersHidden ? ' hidden-answers' : '')}>
        <ul>
          {answers.map((answer, i) => <li key={i}>{answer}</li>)}
        </ul>
      </div>
    </div>
  );
};

export default QABlcok;
