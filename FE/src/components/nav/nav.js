import React, { useState } from "react";
import styles from "./nav.module.css";
import classNames from "classnames/bind";
import { Link } from "react-router-dom";
import HeadlessTippy from "@tippyjs/react/headless";
import "tippy.js/dist/tippy.css";
import user from "../../assets/img/Vector.png";
import avatar from "../../assets/img/avatar.jpg";
const cx = classNames.bind(styles);

const navItem = [
  "Find a Property",
  "Wishlist",
  "Download Mobile App",
  "Become A Host",
];

function NavBar() {
  const [currentAccount, setCurrentAccount] = useState(() => {
    const storageData = JSON.parse(localStorage.getItem("currentAccount"));

    return storageData ?? false;
  });
  // const handleLogOut = () => {
  //   localStorage.removeItem("currentAccount");
  //   if (localStorage.getItem("currentAccount") == null) {
  //     window.location.reload();
  //   }
  // };

  const handleLogOut = () => {
    localStorage.removeItem("currentAccount");
    setCurrentAccount(false);
  };

  return (
    <header className={cx("header")}>
      <HeadlessTippy
        trigger="click"
        hideOnClick="true"
        interactive
        placement="bottom-end"
        render={(attrs) => (
          <div className={cx("wrapper")}>
            <div className={cx("content")} tabIndex="-1" {...attrs}>
              <ul className={cx("sign-in-option")}>
                {!currentAccount ? (
                  <li className={cx("sign-in-list")}>
                    <Link to="/SignUp">Sign Up</Link>
                  </li>
                ) : (
                  <li className={cx("sign-in-list")}>
                    <Link to="/Account">Account</Link>
                  </li>
                )}
                {!currentAccount ? (
                  <li className={cx("sign-in-list")}>
                    <Link to="/Login1">Login</Link>
                  </li>
                ) : (
                  <li className={cx("sign-in-list")} onClick={handleLogOut}>
                    Log Out
                  </li>
                )}
                <li className={cx("sign-in-list")}>Help center</li>
              </ul>
            </div>
          </div>
        )}
      >
        <img
          className={cx("user-avatar")}
          src={currentAccount ? avatar : user}
          alt="no img"
        />
      </HeadlessTippy>

      <Link to="/">
        <div className={cx("menu__relocate")}>
          <span>Relocate</span>
        </div>
      </Link>

      <ul className={cx("menu-nav")}>
        {navItem.map((item, index) => (
          <li key={index} className={cx("menu-nav__item")}>
            <Link to="/Wishlists" className={cx("menu-nav__link")}>
              {item}
            </Link>
          </li>
        ))}
      </ul>
    </header>
  );
}

export default NavBar;
