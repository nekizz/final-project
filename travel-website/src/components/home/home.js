import React from "react";
import "./home.css";
import NavBar from "../nav/nav";
import SectionHero from "../section-Hero/section-Hero";
import TopDestinations from "../top-destinations/top-destionations";
import MoreDestinations from "../more-destinations/more-destinations";

function Home() {
  return (
    <div className="home">
      <NavBar />
      <SectionHero />
      <TopDestinations />
      <MoreDestinations />
    </div>
  );
}

export default Home;
