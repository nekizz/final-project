import React from "react";
import "./nav.css";

const navItem = ["Destinations", "Deals", "Explore", "Resources"];

function NavBar() {
  return (
    <header className="header">
      <div className="menu-btn">
        <span className="menu-btn__burger"></span>
      </div>

      <div className="menu__relocate">
        <span>Relocate</span>
      </div>

      {/* <nav className="nav"> */}
      <ul className="menu-nav">
        {navItem.map((item, index) => (
          <li key={index} className="menu-nav__item ">
            <a href="./nav.js" className="menu-nav__link">
              {item}
            </a>
          </li>
        ))}
      </ul>
      {/* </nav> */}
    </header>
  );
}

export default NavBar;
