import React, { useState } from "react";
import styles from "./SignUp.module.css";

import { AiOutlineClose } from "react-icons/ai";

import classNames from "classnames/bind";
import { Link, useNavigate } from "react-router-dom";
import { Formik } from "formik";
import * as Yup from "yup";
import MyInput from "../../components/MyInput/MyInput";
import Button from "../../components/Button/Button";
const cx = classNames.bind(styles);
function SignUp() {
  // const [signUpAccount, setSignUpAccount] = useState(() => {
  //   const storageSignUpData = JSON.parse(localStorage.getItem("signUpAccount"));

  //   return storageSignUpData ?? [];
  // });
  const phoneRegExp = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;
  const navigate = useNavigate();

  return (
    <div className={cx("sign-up")}>
      <div className={cx("sign-up__top")}>
        <h1 className={cx("heading")}>Sign-Up</h1>
        <Link to="/" className={cx("close-icon__container")}>
          <AiOutlineClose />
        </Link>
      </div>
      <div className={cx("sign-up__intro")}>Let's get you started</div>
      <div className={cx("sign-up__desc")}>Sign up with your information</div>

      <Formik
        initialValues={{
          fullname: "",
          email: "",
          phoneNumber: "",
          password: "",
        }}
        initialTouched={{
          field: true,
        }}
        validateOnMount
        validationSchema={Yup.object({
          fullname: Yup.string().required("Required"),
          email: Yup.string().email().required("Required"),
          phoneNumber: Yup.string()
            .matches(phoneRegExp, "ko phai sdt")
            .required("Required"),
          password: Yup.string().required("Required"),
        })}
        onSubmit={(values, { resetForm, setSubmitting }) => {
          console.log(values);
          // console.log(signUpAccount);
          setTimeout(() => {
            // setSignUpAccount(() => {
            //   const newData = [...signUpAccount, values];
            //   const jsonData = JSON.stringify(newData);
            //   localStorage.setItem("signUpAccount", jsonData);
            // });

            navigate("/login1");
            resetForm({
              fullname: "",
              email: "",
              phoneNumber: "",
              password: "",
            });

            setSubmitting(false);
          }, 1000);
        }}
      >
        {(formik) => (
          <form onSubmit={formik.handleSubmit} className={cx("sign-up__form")}>
            <MyInput
              type="text"
              className={cx("input")}
              name="fullname"
              placeholder="Enter your name"
            ></MyInput>

            <MyInput
              type="email"
              className={cx("input")}
              name="email"
              placeholder="Enter your email"
            ></MyInput>

            <MyInput
              type="text"
              className={cx("input")}
              name="phoneNumber"
              placeholder="Enter your number"
            ></MyInput>
            <MyInput
              type="password"
              className={cx("input")}
              name="password"
              placeholder="Enter your password"
            ></MyInput>
            <Button
              className={cx("sign-up__button", "disabled")}
              type="submit"
              disabled={!formik.isValid || formik.isSubmitting}
            >
              Sign Up
            </Button>
          </form>
        )}
      </Formik>

      <p className={cx("or")}>or</p>
      <button className={cx("sign-up__alt--fb")}>Sign up with FaceBook</button>
      <button className={cx("sign-up__alt--google")}>
        Sign up with Google
      </button>
    </div>
  );
}

export default SignUp;
