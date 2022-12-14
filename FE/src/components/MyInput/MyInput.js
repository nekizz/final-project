import React from "react";
import { useField } from "formik";
import styles from "../MyInput/MyInput.module.css";
import classNames from "classnames/bind";
const cx = classNames.bind(styles);

function MyInput({ type, className, ...props }) {
  const [field, meta] = useField(props);
  const classes = cx({
    [className]: className,
  });

  return (
    <div className={cx("container")}>
      <input className={classes} type={type} {...field} {...props} />
      {meta.touched && meta.error ? (
        <div className={cx("error")}>{meta.error}</div>
      ) : null}
    </div>
  );
}

export default MyInput;
