import React from "react";
import "./footer.css";
import {
  FaFacebook,
  FaTwitter,
  FaInstagram,
  FaLinkedinIn,
} from "react-icons/fa";

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
    <footer className="footer">
      <div className="footer__container">
        {footerInformation.map((item, index) => (
          <div key={index} className="footer__information">
            <h2>{item.name}</h2>
            <div className="footer__information__wrapper">
              {item.array.map((i, index) => (
                <span className="footer__information__desc" key={index}>
                  {i}
                </span>
              ))}
            </div>
          </div>
        ))}
        <div className="footer__social">
          <a href="">
            <FaFacebook className="social__icon" />
          </a>
          <a href="">
            <FaTwitter className="social__icon" />
          </a>
          <a href="">
            <FaInstagram className="social__icon" />
          </a>
          <a href="">
            <FaLinkedinIn className="social__icon" />
          </a>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
