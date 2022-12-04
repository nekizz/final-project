import React, { useState } from "react";
import styles from "./Login1.module.css";

import { AiOutlineClose, AiOutlineMail } from "react-icons/ai";
import { BsFacebook, BsApple, BsGoogle } from "react-icons/bs";

import avatar from "../../assets/img/avatar.jpg";

import classNames from "classnames/bind";
import Button from "../../components/Button/Button";
import { Link } from "react-router-dom";

const cx = classNames.bind(styles);
function Login1() {
  const [currentAccount, setCurrentAccout] = useState(false);

  const handleContinue = (e) => {
    setCurrentAccout(!currentAccount);
    e.preventDefault();
  };

  return (
    <div className={cx("login")}>
      <div className={cx("login__top")}>
        <h1 className={cx("heading")}>login</h1>
        {currentAccount ? (
          <i onClick={handleContinue} className={cx("close-icon__container")}>
            <AiOutlineClose />
          </i>
        ) : (
          <Link to="/" className={cx("close-icon__container")}>
            <AiOutlineClose />
          </Link>
        )}
      </div>
      <form className={cx("login-form")}>
        {currentAccount && (
          <div className={cx("profile-container")}>
            <img className={cx("profile-avatar")} src={avatar} alt="hieu" />
            <div className={cx("profile-information")}>
              <h2 className={cx("profile-name")}>Hello, Hieu le</h2>
              <div className={cx("profile-notyou")}>Not you ?</div>
            </div>
          </div>
        )}
        <div className={cx("input-container")}>
          {!currentAccount && (
            <select name="country" id="country" className={cx("country")}>
              <option value="UAE">UAE</option>
              <option value="VietNam">VietNam</option>
              <option value="Japan">Japan</option>
              <option value="France">France</option>
            </select>
          )}
          <input
            type="text"
            name="phonenumber"
            className={currentAccount ? cx("password") : cx("phonenumber")}
            placeholder={
              currentAccount ? "Enter your password" : "Enter your number"
            }
          />
        </div>
        <p className={cx("login-note")}>
          We’ll call or text you to confirm your number. Standard message and
          data rates apply.
        </p>
        <div className={cx("button-container")}>
          {!currentAccount ? (
            <Button fourth rounded onClick={handleContinue}>
              Continue
            </Button>
          ) : (
            <Button fourth rounded to="/">
              Continue
            </Button>
          )}
        </div>
      </form>
      <div className={cx("login1-alt")}>Or Continue With</div>
      <div className={cx("alt-button__container")}>
        <Button leftIcon={<BsFacebook />} fourth rounded medium>
          Facebook
        </Button>

        <Button leftIcon={<BsGoogle />} fourth rounded medium>
          Google
        </Button>
      </div>
    </div>
  );
}

export default Login1;
