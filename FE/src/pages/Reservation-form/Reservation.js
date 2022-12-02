import React from "react";
import styles from "./Reservation.module.css";
import NavBar from "../../components/nav/nav";
import Footer from "../../components/footer/footer";
import ReservationFormFirst from "../../components/ReservationFormFirst/ReservationFormFirst";

import classNames from "classnames/bind";
import Button from "../../components/Button/Button";

const cx = classNames.bind(styles);
function ReservationForm() {
  return (
    <div className={cx("reservation")}>
      <NavBar />
      <div className={cx("reservation-container")}>
        <div className={cx("col-left")}>
          <h1>Reservation Form Details</h1>
          <Button primary>go to home</Button>
        </div>
        <div className={cx("col-right")}>
          <ReservationFormFirst />
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default ReservationForm;
