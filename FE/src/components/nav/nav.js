import React from "react";
import styles from "./nav.module.css";
import classNames from "classnames/bind";
const cx = classNames.bind(styles);

const navItem = ["Destinations", "Deals", "Explore", "Resources"];

function NavBar() {
  return (
    <header className={cx("header")}>
      <div className={cx("menu-btn")}>
        <span className={cx("menu-btn__burger")}></span>
      </div>

      <div className={cx("menu__relocate")}>
        <span>Relocate</span>
      </div>

      <ul className={cx("menu-nav")}>
        {navItem.map((item, index) => (
          <li key={index} className={cx("menu-nav__item")}>
            <a href="./nav.js" className={cx("menu-nav__link")}>
              {item}
            </a>
          </li>
        ))}
      </ul>
    </header>
  );
}

export default NavBar;
