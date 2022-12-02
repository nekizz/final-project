import React from "react";
import styles from "./nav.module.css";
import classNames from "classnames/bind";
import { Link } from "react-router-dom";
import HeadlessTippy from "@tippyjs/react/headless";
import "tippy.js/dist/tippy.css";
import user from "../../assets/img/Vector.png";
const cx = classNames.bind(styles);

const navItem = [
  "Find a Property",
  "Share Stories",
  "Download Mobile App",
  "Become A Host",
];

function NavBar() {
  return (
    <header className={cx("header")}>
      <div className={cx("menu-btn")}>
        <span className={cx("menu-btn__burger")}></span>
      </div>
      <HeadlessTippy
        trigger="click"
        hideOnClick="true"
        interactive
        placement="bottom-end"
        render={(attrs) => (
          <div className={cx("wrapper")}>
            <div className={cx("content")} tabIndex="-1" {...attrs}>
              <ul className={cx("sign-in-option")}>
                <li className={cx("sign-in-list")}>
                  <Link to="/SignUp">Sign Up</Link>
                </li>
                <li className={cx("sign-in-list")}>
                  {" "}
                  <Link to="/Login1">Login</Link>
                </li>
                <li className={cx("sign-in-list")}>Help center</li>
              </ul>
            </div>
          </div>
        )}
      >
        <img className={cx("user-avatar")} src={user} alt="hieule" />
      </HeadlessTippy>

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
