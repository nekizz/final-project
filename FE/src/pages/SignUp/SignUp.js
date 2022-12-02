import React from "react";
import styles from "./SignUp.module.css";

import { AiOutlineClose } from "react-icons/ai";

import classNames from "classnames/bind";

const cx = classNames.bind(styles);
function SignUp() {
  return (
    <div className={cx("sign-up")}>
      <div className={cx("sign-up__top")}>
        <h1 className={cx("heading")}>Sign-Up</h1>
        <i className={cx("close-icon__container")}>
          <AiOutlineClose />
        </i>
      </div>
      <div className={cx("sign-up__intro")}>Let's get you started</div>
      <div className={cx("sign-up__desc")}>Sign up with your information</div>
      <form className={cx("sign-up__form")}>
        <label>
          Full name
          <br />
          <input
            type="text"
            className={cx("input")}
            placeholder="enter"
            name="fullname"
          />
        </label>
        <br />
        <label>
          Email address
          <br />
          <input
            type="email"
            className={cx("input")}
            placeholder="enter"
            name="fullname"
          />
        </label>
        <br />
        <label>
          Phone number
          <br />
          <input
            type="text"
            className={cx("input")}
            placeholder="enter"
            name="fullname"
          />
        </label>
        <br />
        <label>
          Create password
          <br />
          <input
            type="text"
            className={cx("input")}
            placeholder="enter"
            name="fullname"
          />
          <br />
          Password must contain a minimum of 8 characters
          <br />
          Password must contain at least one symbol e.g @,!
        </label>
        <br />
        <label>
          Email address
          <br />
          <input
            type="text"
            className={cx("input")}
            placeholder="enter"
            name="location"
          />
        </label>

        <button className={cx("sign-up__button")} type="submit">
          Sign Up
        </button>
      </form>
      <p className={cx("or")}>or</p>
      <button className={cx("sign-up__alt--fb")}>Sign up with FaceBook</button>
      <button className={cx("sign-up__alt--google")}>
        Sign up with Google
      </button>
    </div>
  );
}

export default SignUp;
