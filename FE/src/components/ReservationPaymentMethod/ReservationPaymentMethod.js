import React, { useState } from "react";
import classNames from "classnames/bind";
import styles from "./ReservationPaymentMethod.module.css";
import avatar from "../../assets/img/avatar.jpg";
import CreditCard from "../CreditCard/CreditCard";
import Button from "../Button/Button";
import { BiArrowBack } from "react-icons/bi";
import { AiOutlineArrowRight } from "react-icons/ai";
const cx = classNames.bind(styles);

function ReservationPaymentMethod({ handleSetCheckBill }) {
  const [checked, setChecked] = useState(true);
  const handleInputChange = () => {
    setChecked(!checked);
  };

  const alertT = () => {
    alert("Successfull Reservation");
  };

  return (
    <div className={cx("reservation-payment-method")}>
      <div className={cx("information")}>
        <div className={cx("col-2")}>
          <div className={cx("title")}>
            <div>Address</div>
            <div>Province/ City</div>
            <div>Country/ Region</div>
            <div>Phone</div>
          </div>
          <div className={cx("desc")}>
            <div>1A Hoang Sam,Cau Giay</div>
            <div>HaNoi</div>
            <div>VietNam</div>
            <div>0828382000</div>
          </div>
        </div>
        <div className={cx("information-wrapper")}>
          <div className={cx("information-top")}>
            <div className={cx("avatar-container")}>
              <img className={cx("avatar")} src={avatar} alt="" />
              <p className={cx("nickname")}>chu be dan</p>
            </div>
            <i>
              <svg
                width="26"
                height="23"
                viewBox="0 0 26 23"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M17.974 3.99788L21.8889 7.91281C22.0538 8.07774 22.0538 8.34684 21.8889 8.51177L12.4097 17.9909L8.38194 18.438C7.84375 18.4988 7.38802 18.043 7.44878 17.5048L7.89583 13.477L17.375 3.99788C17.5399 3.83295 17.809 3.83295 17.974 3.99788ZM25.0052 3.00396L22.8872 0.885905C22.2274 0.226183 21.1554 0.226183 20.4913 0.885905L18.9549 2.42236C18.7899 2.58729 18.7899 2.85639 18.9549 3.02132L22.8698 6.93625C23.0347 7.10118 23.3038 7.10118 23.4688 6.93625L25.0052 5.39979C25.6649 4.73573 25.6649 3.66368 25.0052 3.00396ZM17.1667 15.4128V19.8312H3.27778V5.94233H13.2517C13.3906 5.94233 13.5208 5.8859 13.6207 5.79042L15.3568 4.05431C15.6866 3.72445 15.4523 3.16455 14.9878 3.16455H2.58333C1.43316 3.16455 0.5 4.09771 0.5 5.24788V20.5257C0.5 21.6758 1.43316 22.609 2.58333 22.609H17.8611C19.0113 22.609 19.9444 21.6758 19.9444 20.5257V13.6767C19.9444 13.2123 19.3845 12.9823 19.0547 13.3078L17.3186 15.0439C17.2231 15.1437 17.1667 15.2739 17.1667 15.4128Z"
                  fill="black"
                />
              </svg>
            </i>
          </div>
          <div className={cx("information-container")}>
            <h4 className={cx("header")}>Name:</h4>
            <p className={cx("header-desc")}>Le Quang Hieu</p>
          </div>
          <div className={cx("information-container")}>
            <h4 className={cx("header")}>Email:</h4>
            <p className={cx("header-desc")}>hieuratdeptrai@gmail.com</p>
          </div>
        </div>
      </div>
      <div className={cx("howwouldyouliketopay")}>
        How would you like to pay
      </div>
      <div className={cx("checkbox-container")}>
        <div className={cx("input-wrapper", "credit-card")}>
          <input
            type="radio"
            id="creditcard"
            name="payment"
            value="creditcard"
            defaultChecked
            onChange={handleInputChange}
          />
          <label htmlFor="creditcard"> Creditcard</label>
        </div>
        <div className={cx("input-wrapper")}>
          <input
            type="radio"
            id="cash"
            name="payment"
            value="cash"
            onChange={handleInputChange}
          />
          <label htmlFor="cash">cash</label>
        </div>
      </div>
      {checked && <CreditCard />}
      <label className={cx("label")}>
        <p className={cx("label-desc")}>Voucher</p>
        <input
          type="text"
          className={cx("input")}
          placeholder="enter"
          name="voucher"
        />
      </label>
      <div className={cx("button-container")}>
        <Button
          medium
          outline
          rounded
          textBlack
          leftIcon={<BiArrowBack />}
          onClick={handleSetCheckBill}
        >
          Back
        </Button>
        <Button
          mediumx
          outline
          black
          rightIcon={<AiOutlineArrowRight />}
          onClick={alertT}
        >
          Continue Booking
        </Button>
      </div>
    </div>
  );
}

export default ReservationPaymentMethod;
