import React from 'react';
import './App.scss';
import Header from "./components/Header/Header";
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Redirect,
} from 'react-router-dom';
import Login from "./components/Login/Login";
import Profile from "./components/Profile/Profile";
import Sidebar from "./components/Sidebar/Sidebar";
import History from "./components/History/History";

function App() {

  return (
    <div className="App">
      <Router>
        <Header />
        <div className="d-flex">
          <Sidebar />
          <div className="root">
            <Switch>
              <Route path="/history">
                <History />
              </Route>
              <Route path="/profile">
                <Profile />
              </Route>
              <Route path="/login">
                <Login />
              </Route>
              <Route exact path="/">
                <Redirect to="/login" />
              </Route>
            </Switch>
          </div>
        </div>
      </Router>
    </div>
  );
}

export default App;
