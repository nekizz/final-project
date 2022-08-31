import React from "react";
import styles from "./top-destinations.module.css";
import imga from "../../assets/img/download.jpg";
import classNames from "classnames/bind";

const cx = classNames.bind(styles);

const topDestinations = [
  {
    state: "Paraty",
    city: "RIO DE JANEIRO",
  },
  {
    state: "Morretes",
    city: "PARANA",
  },
  {
    state: "Olinda",
    city: "PERNAMBUCO",
  },
  {
    state: "Gramado",
    city: "RIO GRANDE DO SUL",
  },
];

function TopDestinations() {
  return (
    <div className={cx("top-destinations")}>
      <div className={cx("top-destinations__content")}>
        <h2 className={cx("top-destinations__top")}>top</h2>
        <h2 className={cx("top-destinations__dest")}>destinations</h2>
        <p className={cx("top-destinations__desc")}>
          it's hard enough deciding to move, you don't have to worry about where
          to move to. These are some of the most popular and best locations to
          move to based on a number of factors.
        </p>
      </div>

      <div className={cx("top-destinations-container")}>
        {topDestinations.map((destination, index) => (
          <div className={cx("top-destinations-item")} key={index}>
            <img
              src={imga}
              className={cx("top-destinations-item__img")}
              alt=""
            />
            <div className={cx("top-destinations-info")}>
              <h3 className={cx("top-destinations-state")}>
                {destination.state}
              </h3>
              <p className={cx("top-destinations-city")}>{destination.city}</p>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default TopDestinations;
