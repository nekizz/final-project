import React from "react";
import styles from "./top-destinations.module.css";

import classNames from "classnames/bind";
import { Link } from "react-router-dom";

const cx = classNames.bind(styles);

function TopDestinations({ handleData }) {
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

      <div id="id" className={cx("top-destinations-container")}>
        {handleData.map((destination, index) => (
          <div className={cx("top-destinations-item")} key={index}>
            <div className={cx("front")}>
              <Link to="/HomeBooking" style={{ width: "100%", height: "100%" }}>
                <img
                  src={destination.thumbnail}
                  className={cx("top-destinations-item__img")}
                  alt=""
                />
              </Link>
              <div className={cx("top-destinations-info")}>
                <h3 className={cx("top-destinations-state")}>
                  {destination.name}
                </h3>
              </div>
            </div>
            <div className={cx("back")}>hehe</div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default TopDestinations;
