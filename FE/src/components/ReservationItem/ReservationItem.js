import React, { useState } from "react";
import classNames from "classnames/bind";
import styles from "./ReservationItem.module.css";
const cx = classNames.bind(styles);

function ReservationItem({ removeItem, id, item }) {
  const [total, setTotal] = useState(1);
  const { name, address, thumbnail } = item;
  const handleIncrease = () => {
    total < 4 && setTotal((prev) => prev + 1);
  };

  const handleDecrease = () => {
    total > 1 && setTotal((prev) => prev - 1);
  };

  return (
    <div className={cx("reservation-item")}>
      <div className={cx("img-container")}>
        <img className={cx("avatar")} src={thumbnail} alt="hieu" />
      </div>
      <div className={cx("item-information")}>
        <i style={{ textAlign: "end" }} onClick={() => removeItem(id)}>
          <svg
            width="26"
            height="22"
            viewBox="0 0 26 22"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M23.4902 0.122559H3.17773C1.88379 0.122559 0.833984 1.17236 0.833984 2.46631V19.6538C0.833984 20.9478 1.88379 21.9976 3.17773 21.9976H23.4902C24.7842 21.9976 25.834 20.9478 25.834 19.6538V2.46631C25.834 1.17236 24.7842 0.122559 23.4902 0.122559ZM19.4082 14.3071C19.6426 14.5415 19.6426 14.9224 19.4082 15.1567L17.4307 17.1343C17.1963 17.3687 16.8154 17.3687 16.5811 17.1343L13.334 13.8579L10.0869 17.1343C9.85254 17.3687 9.47168 17.3687 9.2373 17.1343L7.25977 15.1567C7.02539 14.9224 7.02539 14.5415 7.25977 14.3071L10.5361 11.0601L7.25977 7.81299C7.02539 7.57861 7.02539 7.19775 7.25977 6.96338L9.2373 4.98584C9.47168 4.75147 9.85254 4.75147 10.0869 4.98584L13.334 8.26221L16.5811 4.98584C16.8154 4.75147 17.1963 4.75147 17.4307 4.98584L19.4082 6.96338C19.6426 7.19775 19.6426 7.57861 19.4082 7.81299L16.1318 11.0601L19.4082 14.3071Z"
              fill="black"
            />
          </svg>
        </i>
        <div className={cx("item-name-wrapper")}>
          <h2 className={cx("item-name")}>{name}</h2>
          <p className={cx("item-location")}>{address}</p>
        </div>
        <div className={cx("select-container")}>
          <select className={cx("select")} name="bedroom" id="bedroom">
            <option value="1">1 bedroom</option>
            <option value="2">2 bedroom</option>
          </select>
          <select className={cx("select")} name="bathroom" id="bathroom">
            <option value="1">1 bathroom</option>
            <option value="2">2 bathroom</option>
          </select>
          <select className={cx("select")} name="other" id="other">
            <option value="1">1 Other Services</option>
            <option value="2">2 Other Services</option>
          </select>
        </div>
        <div className={cx("total-room")}>
          <p className={cx("total")}>Total Room</p>
          <div className={cx("minus")} onClick={handleDecrease}>
            <svg
              width="23"
              height="23"
              viewBox="0 0 23 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11.834 3.99756C7.41463 3.99756 3.83398 7.5782 3.83398 11.9976C3.83398 16.4169 7.41463 19.9976 11.834 19.9976C16.2533 19.9976 19.834 16.4169 19.834 11.9976C19.834 7.5782 16.2533 3.99756 11.834 3.99756ZM7.57592 13.2879C7.36302 13.2879 7.18882 13.1137 7.18882 12.9008V11.0943C7.18882 10.8814 7.36302 10.7072 7.57592 10.7072H16.092C16.305 10.7072 16.4791 10.8814 16.4791 11.0943V12.9008C16.4791 13.1137 16.305 13.2879 16.092 13.2879H7.57592Z"
                fill="black"
              />
            </svg>
          </div>
          <div className={cx("number")}>{total}</div>
          <div className={cx("plus")} onClick={handleIncrease}>
            <svg
              width="23"
              height="23"
              viewBox="0 0 23 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11.834 3.99756C7.41463 3.99756 3.83398 7.5782 3.83398 11.9976C3.83398 16.4169 7.41463 19.9976 11.834 19.9976C16.2533 19.9976 19.834 16.4169 19.834 11.9976C19.834 7.5782 16.2533 3.99756 11.834 3.99756ZM16.4791 12.9008C16.4791 13.1137 16.305 13.2879 16.092 13.2879H13.1243V16.2556C13.1243 16.4685 12.9501 16.6427 12.7372 16.6427H10.9308C10.7179 16.6427 10.5437 16.4685 10.5437 16.2556V13.2879H7.57592C7.36302 13.2879 7.18882 13.1137 7.18882 12.9008V11.0943C7.18882 10.8814 7.36302 10.7072 7.57592 10.7072H10.5437V7.73949C10.5437 7.52659 10.7179 7.3524 10.9308 7.3524H12.7372C12.9501 7.3524 13.1243 7.52659 13.1243 7.73949V10.7072H16.092C16.305 10.7072 16.4791 10.8814 16.4791 11.0943V12.9008Z"
                fill="black"
              />
            </svg>
          </div>
        </div>
      </div>
    </div>
  );
}

export default ReservationItem;
