import React from "react";
import classNames from "classnames/bind";
import styles from "./ReservationFormFirst.module.css";
import ReservationItem from "../ReservationItem/ReservationItem";

const cx = classNames.bind(styles);

function ReservationFormFirst() {
  return (
    <div className={cx("reservation-form-first")}>
      <div className={cx("add")}>Add Room</div>
      <div className={cx("reservation-item--container")}>
        <ReservationItem />
        <ReservationItem />
        <ReservationItem />
      </div>
      <div className={cx("")}></div>
    </div>
  );
}

export default ReservationFormFirst;
