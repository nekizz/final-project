import React from "react";
import classNames from "classnames/bind";
import styles from "./CreditCard.module.css";

const cx = classNames.bind(styles);

function CreditCard() {
  return (
    <div className={cx("credit-card")}>
      <form className={cx("payment-form")}>
        <div className={cx("form-wrapper")}>
          <label className={cx("label")}>
            <p className={cx("label-desc")}>Full name</p>
            <input
              type="text"
              className={cx("input")}
              placeholder="enter"
              name="fullname"
            />
          </label>
          <label className={cx("label")}>
            <p className={cx("label-desc")}>Card type</p>
            <select
              name="cardtype"
              id="cardtype"
              className={cx("input-select")}
            >
              <option value="Mastercard" defaultChecked>
                Mastercard
              </option>
              <option value="Visa">Visa</option>
            </select>
          </label>
          <label className={cx("label")}>
            <p className={cx("label-desc")}>Card number</p>
            <input
              type="text"
              className={cx("input")}
              placeholder="enter"
              name="cardnumber"
            />
          </label>
          <label className={cx("label")}>
            <p className={cx("label-desc")}>Expired date</p>
            <input
              className={cx("input-select")}
              type="month"
              name="expired"
              placeholder="dd-mm-yyyy"
              min="2018-01"
              max="2030-12"
            />
          </label>
        </div>
      </form>
    </div>
  );
}

export default CreditCard;
