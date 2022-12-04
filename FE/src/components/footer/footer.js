import React from "react";
import classNames from "classnames/bind";
import styles from "./footer.module.css";
import footerIMG from "../../assets/img/footer.png";
import footer2 from "../../assets/img/footer2.png";
import Button from "../Button/Button";
import {
  FaFacebook,
  FaTwitter,
  FaInstagram,
  FaLinkedinIn,
} from "react-icons/fa";
import { IoLogoGooglePlaystore } from "react-icons/io5";
import { GrAppleAppStore } from "react-icons/gr";

const cx = classNames.bind(styles);

function Footer() {
  return (
    <footer
      style={{ backgroundImage: `url(${footerIMG})` }}
      className={cx("footer")}
    >
      <div className={cx("footer__container")}>
        <div className={cx("footer-col")}>
          <h1 className={cx("logo")}>LOGO</h1>
          <span className={cx("description")}>
            Lorem isasdfjawepfijwaoidfjaosidjfoiasjdfoiasjdoifjawoijfedoi
          </span>
          <div className={cx("button-container")}>
            <Button medium third leftIcon={<IoLogoGooglePlaystore />}>
              PlayStore
            </Button>
            <Button medium leftIcon={<GrAppleAppStore />} third>
              AppleStore
            </Button>
          </div>
        </div>
        <div className={cx("footer-col")}>
          <h3 className={cx("title")}>COMPANY</h3>
          <span className={cx("description")}>About us</span>
          <span className={cx("description")}>Legal Information</span>
          <span className={cx("description")}>Contact Us </span>
          <span className={cx("description")}>Blogs</span>
        </div>
        <div className={cx("footer-col")}>
          <h3 className={cx("title")}>HELP CENTER</h3>
          <span className={cx("description")}>Find a Property</span>
          <span className={cx("description")}>How to host</span>
          <span className={cx("description")}>Why Us</span>
          <span className={cx("description")}>FAQs</span>
          <span className={cx("description")}>Rental Guides</span>
        </div>
        <div className={cx("footer-col")}>
          <h3 className={cx("title")}>CONTACT INFO</h3>
          <span className={cx("description")}>Phone:1234567890</span>
          <span className={cx("description")}>Email:company@gmail</span>
          <span className={cx("description")}>Location:100 stupid street</span>
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
      </div>
      <img className={cx("sub-background")} src={footer2} alt="hieu" />
    </footer>
  );
}

export default Footer;
