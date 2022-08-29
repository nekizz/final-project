import React from "react";
import styles from "./checkoutbody.css";
import classNames from "classnames/bind";

const cx = classNames.bind(styles);

function CheckOutBody() {
  return (
    <div className={cx("wrapper")}>
      <div className={cx("card")}>
        <img
          className={cx("card-image")}
          src="https://images.pexels.com/photos/3586966/pexels-photo-3586966.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="hieu"
        />
        <div className={cx("descriptions")}>
          <h2 className={cx("title")}>Gamado</h2>
          <span className={cx("subtitle")}>hehe</span>
        </div>
      </div>
      <div className={cx("more-information")}>heheheheh</div>
    </div>
  );
}

export default CheckOutBody;
