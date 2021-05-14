import React from "react";
import Button from "../Button/Button";
import { useHistory } from 'react-router-dom';

const Login: React.FC = () => {
  const history = useHistory();

  return (
    <div>
      <h1>My profile</h1>
      <form className="mt-4">
        <div className="d-flex flex-column w-25">
          <label htmlFor="login">Login</label>
          <input type="text" placeholder="Username" />
        </div>
        <div className="d-flex flex-column w-25 mt-3">
          <label htmlFor="password">Password</label>
          <input type="password" placeholder="Password" />
        </div>
        <div className="mt-5">
          <Button onClick={() => history.push('profile')}>Log in</Button>
        </div>
      </form>
    </div>
  )
};

export default Login;
