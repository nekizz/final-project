import React, { useState } from "react";
import styles from "./Reservation.module.css";
import NavBar from "../../components/nav/nav";
import Footer from "../../components/footer/footer";
import ReservationFormFirst from "../../components/ReservationFormFirst/ReservationFormFirst";
import ReservationPaymentMethod from "../../components/ReservationPaymentMethod/ReservationPaymentMethod";
import classNames from "classnames/bind";
import Button from "../../components/Button/Button";

const cx = classNames.bind(styles);
function ReservationForm() {
  const [checkBill, setCheckBill] = useState(true);
  const handleSetCheckBill = () => {
    setCheckBill(!checkBill);
  };
  return (
    <div className={cx("reservation")}>
      <NavBar />
      <div className={cx("reservation-container")}>
        <div className={cx("col-left")}>
          <h1>Reservation Form Details</h1>
          <Button primary>go to home</Button>
        </div>
        <div className={cx("col-right")}>
          {checkBill ? (
            <ReservationFormFirst handleSetCheckBill={handleSetCheckBill} />
          ) : (
            <ReservationPaymentMethod handleSetCheckBill={handleSetCheckBill} />
          )}
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default ReservationForm;
