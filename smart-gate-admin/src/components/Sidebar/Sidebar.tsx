import React from "react";
import {useHistory, useLocation} from "react-router-dom";

const Sidebar: React.FC = () => {
  const location = useLocation();
  const path = location.pathname;
  const history = useHistory();

  return (
    <div className="sidebar">
      <ul className="list-unstyled tabs">
        <li className={path === '/profile' || path === '/login' ? 'active' : ''} onClick={() => history.push('profile')}>
          <img className="icon" src="/images/profile-icon.svg" alt=""/>
          <span className="title">My profile</span>
        </li>
        <li className={path === '/history' ? 'active' : ''} onClick={() => history.push('history')}>
          <img className="icon" src="/images/history-icon.svg" alt=""/>
          <span className="title">History</span>
        </li>
        <li><img className="icon" src="/images/statistics-icon.svg" alt=""/><span className="title">Statistics</span></li>
      </ul>
    </div>
  )
};

export default Sidebar;
