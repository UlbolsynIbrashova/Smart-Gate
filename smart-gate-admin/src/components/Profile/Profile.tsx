import React from "react";
import './styles.scss';
import Button from "../Button/Button";

const Profile: React.FC = () => {
  return (
    <div className="profile">
      <h1>My profile</h1>
      <div className="mt-4">
        <h2 className="mb-3">Authentication details</h2>
        <div className="data"><span className="label">Login: </span><span className="description">Mon99</span></div>
        <div className="data"><span className="label">Phone number: </span><span className="description">+7 (775) 279 3949</span></div>
        <div className="data"><span className="label">Email: </span><span className="description">moniccaa20@gmail.com</span></div>
      </div>
      <div className="mt-4">
        <h2 className="mb-3">Change password</h2>
        <div className="data">
          <label className="label">Current password: </label>
          <input className="description" type="password" placeholder="Current password"/>
        </div>
        <div className="data">
          <label className="label">New password: </label>
          <input className="description" type="password" placeholder="New password"/>
        </div>
        <div className="data">
          <label className="label">Confirm password: </label>
          <input className="description" type="password" placeholder="Confirm password"/>
        </div>
        <div className="mt-4">
          <Button>Save</Button>
        </div>
      </div>
    </div>
  );
};

export default Profile;
