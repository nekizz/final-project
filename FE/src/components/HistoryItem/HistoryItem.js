import React from "react";
import classNames from "classnames/bind";
import styles from "./HistoryItem.module.css";
import avatar from "../../assets/img/avatar.jpg";
import Button from "../Button/Button";

const cx = classNames.bind(styles);

function HistoryItem({ children }) {
  return (
    <div className={cx("history-item")}>
      <div className={cx("item-container")}>
        <div className={cx("col-left")}>
          <div className={cx("img-container")}>
            <img src={avatar} alt="No img" className={cx("image")} />
          </div>
          <div className={cx("item-information")}>
            <div className={cx("item-title")}>Fully Furnished Apartment</div>
            <div className={cx("item-specific")}>
              <div className={cx("specific")}>
                Check In: <span className={cx("time")}>12 Mar 2021</span>
              </div>
              <div className={cx("specific")}>
                Duration: <span className={cx("time")}>Long (2-5 Years)</span>
              </div>
              <div className={cx("specific")}>
                Guest: <span className={cx("time")}>12 Mar 2021</span>
              </div>
            </div>
            <div className={cx("item-price")}>$1000</div>
          </div>
        </div>
        <div className={cx("col-right")}>
          <Button mediumx black rounded>
            Cancel Reservation
          </Button>
        </div>
      </div>
    </div>
  );
}

export default HistoryItem;
