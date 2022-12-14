import React from "react";
import styles from "./section-Hero.module.css";
import { HiArrowNarrowDown } from "react-icons/hi";
import classNames from "classnames/bind";

const cx = classNames.bind(styles);

function SectionHero() {
  return (
    <div className={cx("section-hero")}>
      <div className={cx("section-hero__content")}>
        <p className={cx("section-hero__heading")}>make the right</p>
        <p className={cx("section-hero__slogan")}>MOVE.</p>
      </div>
      <div className={cx("section-hero__explore")}>
        <a href="#id">
          <div className={cx("section-hero__circle")}></div>
          <HiArrowNarrowDown className={cx("section-hero__icon")} />
        </a>
        <div className={cx("section-hero__text")}>
          Explore <br /> Destination
        </div>
      </div>
    </div>
  );
}

export default SectionHero;
