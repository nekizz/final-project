import React from "react";
import classNames from "classnames/bind";

import styles from "./footer.module.css";
import {
  FaFacebook,
  FaTwitter,
  FaInstagram,
  FaLinkedinIn,
} from "react-icons/fa";

const cx = classNames.bind(styles);

const footerInformation = [
  {
    name: "LEGAL",
    array: [
      "MSA",
      "Privacy",
      "GDPR",
      "Guidelines for Law Enforcement",
      "Terms of Service",
      "Manage Cookies",
    ],
  },
  {
    name: "PRODUCT",
    array: [
      "Why move?",
      "Features",
      "Omnichannel",
      "Community",
      "Terms of Service",
      "Manage Cookies",
    ],
  },
  {
    name: "COMPANY",
    array: ["Team", "About", "Jobs", "Partners", "Press", "Blog"],
  },
];

function Footer() {
  return (
    <footer className={cx("footer")}>
      <div className={cx("footer__container")}>
        {footerInformation.map((item, index) => (
          <div key={index} className={cx("footer__information")}>
            <h2>{item.name}</h2>
            <div className={cx("footer__information__wrapper")}>
              {item.array.map((i, index) => (
                <span className={cx("footer__information__desc")} key={index}>
                  {i}
                </span>
              ))}
            </div>
          </div>
        ))}
        <div className={cx("footer__social")}>
          <a href="/">
            <FaFacebook className={cx("social__icon")} />
          </a>
          <a href="/">
            <FaTwitter className={cx("social__icon")} />
          </a>
          <a href="/">
            <FaInstagram className={cx("social__icon")} />
          </a>
          <a href="/">
            <FaLinkedinIn className={cx("social__icon")} />
          </a>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
