import React, { useEffect, useState } from "react";
import styles from "./Login1.module.css";

import { AiOutlineClose } from "react-icons/ai";
import { BsFacebook, BsGoogle } from "react-icons/bs";

import avatar from "../../assets/img/avatar.jpg";

import classNames from "classnames/bind";
import Button from "../../components/Button/Button";
import { Link, useNavigate } from "react-router-dom";
import { Formik } from "formik";
import * as Yup from "yup";
import MyInput from "../../components/MyInput/MyInput";
const cx = classNames.bind(styles);
function Login1() {
  const [currentAccount, setCurrentAccount] = useState(false);
  const [value] = useState([]);
  useEffect(() => {
    console.log(value);
  }, [value]);
  const navigate = useNavigate();
  const handleContinue = (e) => {
    setCurrentAccount(!currentAccount);
    e.preventDefault();
  };
  const phoneRegExp = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;

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
      <Formik
        initialValues={{
          number: "",
          password: "",
        }}
        initialTouched={{
          field: true,
        }}
        validateOnMount
        validationSchema={Yup.object(
          !currentAccount
            ? {
                number: Yup.string()
                  .matches(phoneRegExp, "sai roi")
                  .required("Required"),
              }
            : {
                password: Yup.string().required("required"),
              }
        )}
        onSubmit={(values, { setSubmitting }) => {
          setTimeout(() => {
            // console.log(JSON.stringify(values, null, 2));
            const jsonData = JSON.stringify(currentAccount);
            localStorage.setItem("currentAccount", jsonData);
            setSubmitting(false);
            navigate("/");
          }, 5000);
        }}
      >
        {(formik) => (
          <form onSubmit={formik.handleSubmit} className={cx("login-form")}>
            {currentAccount && (
              <div className={cx("profile-container")}>
                <img className={cx("profile-avatar")} src={avatar} alt="hieu" />
                <div className={cx("profile-information")}>
                  <h2 className={cx("profile-name")}>Hello, Huyen Linh</h2>
                  <div className={cx("profile-notyou")}>Not you ?</div>
                </div>
              </div>
            )}
            <div className={cx("input-container")}>
              {currentAccount ? (
                <MyInput
                  type="password"
                  name="password"
                  className={cx("password")}
                  placeholder={"Enter your password"}
                ></MyInput>
              ) : (
                <MyInput
                  type="text"
                  name="number"
                  className={cx("phonenumber")}
                  placeholder={"Enter your number"}
                ></MyInput>
              )}
            </div>
            <p className={cx("login-note")}>
              We’ll call or text you to confirm your number. Standard message
              and data rates apply.
            </p>
            <div className={cx("button-container")}>
              {!currentAccount ? (
                <Button
                  className={cx("disabled")}
                  type="submit"
                  fourth
                  rounded
                  onClick={handleContinue}
                  disabled={!formik.isValid}
                >
                  Continue
                </Button>
              ) : (
                <Button
                  className={cx("disabled")}
                  type="submit"
                  fourth
                  rounded
                  disabled={formik.isSubmitting || !formik.isValid}
                >
                  {formik.isSubmitting ? (
                    <div className="w-5 h-5 mx-auto border-2 border-t-2 border-white rounded-full border-t-transparent animate-spin"></div>
                  ) : (
                    "Login"
                  )}
                </Button>
              )}
            </div>
          </form>
        )}
      </Formik>

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
