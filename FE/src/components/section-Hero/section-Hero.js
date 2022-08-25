import React from "react";
import "./section-Hero.css";
import { HiArrowNarrowDown } from "react-icons/hi";

function SectionHero() {
  return (
    <div className="section-hero">
      <div className="section-hero__content">
        <p className="section-hero__heading">make the right</p>
        <p className="section-hero__slogan">MOVE.</p>
      </div>
      <div className="section-hero__explore">
        <div className="section-hero__circle"></div>
        <HiArrowNarrowDown className="section-hero__icon" />
        <div className="section-hero__text">
          Explore <br /> Destination
        </div>
      </div>
    </div>
  );
}

export default SectionHero;
