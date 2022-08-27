import React from "react";
import NavBar from "../nav/nav";
import SectionHero from "../section-Hero/section-Hero";
import TopDestinations from "../top-destinations/top-destionations";
import MoreDestinations from "../more-destinations/more-destinations";
import Footer from "../footer";

function Home() {
  return (
    <div className="home">
      <NavBar />
      <SectionHero />
      <TopDestinations />
      <MoreDestinations />
      <Footer />
    </div>
  );
}

export default Home;
