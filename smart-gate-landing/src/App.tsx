import React, {useState} from 'react';
import './App.scss';
import Button from "./components/Button/component";
import QABlcok from "./components/QABlock/component";
import {Props} from "./components/Modal/props";
import {mockData} from "./static/constants";
import Modal from "./components/Modal/component";
import ConsultModal from "./components/ConsultModal/component";

function App() {
  const [menuOpen, setMenuOpen] = useState(false);
  const [modalInfo, setModalInfo] = useState<{ readonly key: string } & Props | undefined>();
  const [consultModalOpen, setConsultModalOpen] = useState(false);

  return (
    <div className="App">
      <div className={'menu ' + (!menuOpen ? 'hidden' : '')}>
        <div className="menu__header">
          <img onClick={() => setMenuOpen(false)} src="images/close.svg" alt="close" />
        </div>
        <ul className="menu__items">
          <li>Что такое Smart Gate?</li>
          <li>Как это работает?</li>
          <li>FAQ</li>
          <li>Наши решения</li>
          <li>Контакты</li>
        </ul>
        <div className="menu__footer">
          <img src="images/whatsapp.svg" alt="whatsapp" />
          <img src="images/instagram.svg" alt="instagram" />
          <img src="images/facebook.svg" alt="facebook" />
          <img src="images/twitter.svg" alt="twitter" />
        </div>
      </div>
      <div className="header-container">
        <img onClick={() => setMenuOpen(true)} src="images/hamburger-menu.svg" alt="hamburger menu" />
        <img src="images/logo.png" alt="logo" />
      </div>
      <div className="app-container">
        <h1 className="primary-green mb-3">Smart gate</h1>
        <h3 className="primary-green">Бесконтактный паспортный контроль за 10 сек.</h3>
        <div className="my-5">
          <div className="d-flex mb-4">
            <img src="images/queue.svg" alt="queue" />
            <p className="text-default">Больше никаких длинных очередей во время паспортного контроля.</p>
          </div>
          <div className="d-flex mb-4">
            <img src="images/people.svg" alt="queue" />
            <p className="text-default">Бесконтактная идентификация личности за 10 сек.</p>
          </div>
          <div className="d-flex mb-4">
            <img src="images/database.svg" alt="queue" />
            <p className="text-default">Данная по статистике. Количественное доказательство.</p>
          </div>
        </div>
        <div className="d-flex justify-content-around">
          <Button variant="outlined">Что такое SmartGate?</Button>
          <Button onClick={() => setConsultModalOpen(true)} variant="contained">Оставить заявку</Button>
        </div>
      </div>
      <div className="app-container dark-background text-white">
        <h2 className="text-center">Что такое Smart Gate?</h2>
        <div className="inner-block">
          <p className="text-small">
            Бесконтактный способ пересечения границы (в международных аэропортах РК, на границе РК) через биометрические устройства, путем сканирования радужной оболочки глаз.
            <br/>
            <br/>
            Smart Gate может помочь властям <b>автоматизировать процесс</b> обработки входа и выхода пассажиров и <b>сократить время ожидания</b>, в то же время <b>обеспечивая безопасность</b>, защиту национальных границ и устранение угроз.
          </p>
          <div className="inner-block__empty-box" />
        </div>
      </div>
      <div className="app-container">
        <h3>
          Поможем <span className="primary-green">снизить расходы</span> на обработку пользовательских данных
        </h3>
        <div className="inner-block">
          <p className="text-xsmall">за счет замены сотрудников иммиграционной службы на системы ИИ</p>
          <div className="mt-4">
            <div className="d-flex align-items-center">
              <img className="mr-3" src="images/time-manager.svg" alt="time manager" />
              <p className="text-small">
                Время на проверку <b>1 человека</b> сотрудником = <b>10 проверенных людей</b> с помощью Smart Gate
              </p>
            </div>
            <div className="d-flex align-items-center my-3">
              <p className="text-small">
                <b>Чем больше времени проводит</b> человек после прохода паспортного контроля в стране,
                или на территории аэропорта, <b>тем экономически это выгоднее</b>
              </p>
              <img className="ml-3" src="images/global.svg" alt="time manager" />
            </div>
            <div className="d-flex align-items-center">
              <img className="mr-3" src="images/approve.svg" alt="time manager" />
              <p className="text-small">Социальное доказательство</p>
            </div>
          </div>
        </div>
      </div>
      <div className="app-container dark-background text-white ment-background">
        <h3>Снижение корррупционных действии</h3>
        <div className="inner-block">
          <p className="text-default mb-3">За счет чего? Как?</p>
          <Button variant="contained">Подробнее</Button>
        </div>
      </div>
      <div className="app-container terr-background">
        <h3 className="mb-3">Минимизировать совершение терроризма, нелегальных пересечении границ</h3>
        <br/>
      </div>
      <div className="app-container dark-background text-white covid-background">
        <h3>Снижение риска заболеваемости COVID за счет:</h3>
        <div className="d-flex advantages">
          <div className="w-50">
            <h2>01</h2>
            <p className="w-75 text-small font-weight-600">бесконтактной верификации</p>
          </div>
          <div className="w-50">
            <h2>02</h2>
            <p className="w-75 text-small font-weight-bolder">сокращения живых очередей</p>
          </div>
        </div>
      </div>
      <div className="app-container">
        <h2 className="text-center primary-green">SMART GATE</h2>
        <div className="inner-block text-center">
          <p className="text-small mb-4">Бесконтактный паспортный контроль за <b>10 сек.</b></p>
          <div>
            <img className="mb-4" src="images/terminal.png" alt="terminal" />
          </div>
          <Button variant="outlined">Оставить заявку</Button>
        </div>
      </div>
      <div className="app-container dark-background text-white">
        <h3>Часто задаваемые вопросы</h3>
        <div className="mt-3 mb-5">
          <QABlcok
            question="Насколько проект рентабелен?"
            answers={['Очень крутая возможность сканера', 'Безопасная и удобная система для пользователей', 'Нанмен жесен - тоясын!']}
          />
          <QABlcok
            question="Как насчет безопасности данных?"
            answers={['Очень крутая возможность сканера', 'Безопасная и удобная система для пользователей', 'Нанмен жесен - тоясын!']}
          />
          <QABlcok
            question="Ваш проект может оставить людей без работы."
            answers={['Очень крутая возможность сканера', 'Безопасная и удобная система для пользователей', 'Нанмен жесен - тоясын!']}
          />
          <QABlcok
            question="В каких еще сферах еще можно использовать?"
            answers={['Очень крутая возможность сканера', 'Безопасная и удобная система для пользователей', 'Нанмен жесен - тоясын!']}
          />
        </div>
        <p className="mb-3">Не нашли, что искали?</p>
        <span className="mr-2">Спросите у нас: </span>
        <Button variant="contained">Задать вопрос</Button>
      </div>
      <div className="solutions dark-background text-white">
        <h3 className="text-center">Наши решения для:</h3>
        <div className="my-5">
          <div className="position-relative">
            <img src="images/logistic.png" alt="logistic" />
            <div className="bg-text">
              Логистика
            </div>
          </div>
          <div className="solutions__description">
            <p className="text-small text-uppercase mb-3">Логистические и транспортные компании</p>
            <Button
              onClick={() => setModalInfo(mockData.find((data) => data.key === 'logistic'))}
              variant="contained"
            >
              Подробнее
            </Button>
          </div>
        </div>
        <div className="my-5">
          <div className="position-relative">
            <img src="images/finance.png" alt="finance" />
            <div className="bg-text">
              Финансы
            </div>
          </div>
          <div className="solutions__description">
            <p className="text-small text-uppercase mb-3">Финансовые учреждения. Банковские организации.</p>
            <Button variant="contained">Подробнее</Button>
          </div>
        </div>
        <div className="my-5">
          <div className="position-relative">
            <img src="images/recruting.png" alt="recruting" />
            <div className="bg-text">
              Рекрутинг
            </div>
          </div>
          <div className="solutions__description">
            <p className="text-small text-uppercase mb-3">Проверка сотрудников при подборе персонала</p>
            <Button variant="contained">Подробнее</Button>
          </div>
        </div>
      </div>
      <div className="app-container">
        <h3 className="primary-green">Почему именно мы?</h3>
        <div className="inner-block">
          <p>Работая с нами, Вы получаете:</p>
          <div className="mt-4 px-2">
            <div className="d-flex align-items-center">
              <img src="images/checked.svg" alt="checked" />
              <p className="text-small ml-4">Работа под ключ. Полный набор услуг по ведению проекта.</p>
            </div>
            <div className="d-flex align-items-center my-4">
              <img src="images/checked.svg" alt="checked" />
              <p className="text-small ml-4">Гибкие цены под ваши запросы</p>
            </div>
            <div className="d-flex align-items-center">
              <img src="images/checked.svg" alt="checked" />
              <p className="text-small ml-4">Работа под ключ. Полный набор услуг по ведению проекта.</p>
            </div>
          </div>
        </div>
      </div>
      <div className="py-3 px-4 dark-background text-white">
        <p>КОНТАКТЫ</p>
        <div className="d-flex align-items-center mb-3">
          <img src="images/location.svg" alt="location" />
          <span className="text-xsmall ml-2">Казахстан, Алматы</span>
        </div>
        <div className="d-flex align-items-center mb-3">
          <img src="images/phone.svg" alt="location" />
          <span className="text-xsmall ml-2">+7 (771) 593-16-54</span>
        </div>
        <div className="d-flex align-items-center mb-4">
          <img src="images/mail.svg" alt="location" />
          <span className="text-xsmall ml-2">smartgate@gmail.com</span>
        </div>
        <Button onClick={() => setConsultModalOpen(true)} variant="contained">Бесплатная консультация</Button>
      </div>
      {modalInfo && (
        <Modal
          title={modalInfo.title}
          imageName={modalInfo.imageName}
          descriptions={modalInfo.descriptions}
          buttonLabel={modalInfo.buttonLabel}
          onCLose={() => setModalInfo(undefined)}
          subTitle={modalInfo.subTitle}
        />
      )}
      {consultModalOpen && (
        <ConsultModal onClose={() => setConsultModalOpen(false)} />
      )}
    </div>
  );
}

export default App;
