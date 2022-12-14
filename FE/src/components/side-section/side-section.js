import React from "react";
import classNames from "classnames/bind";
import styles from "./side-section.module.css";
import Button from "../Button/Button";

const cx = classNames.bind(styles);

function SideSection({ children, h3, span }) {
  return (
    <div className={cx("side-section")}>
      <div className={cx("information-wrapper")}>
        <h3 className={cx("title")}>{h3}</h3>
        <span className={cx("desc")}>{span}</span>
        <br />
        <Button medium rounded black>
          {children}
        </Button>
      </div>
    </div>
  );
}

export default SideSection;
