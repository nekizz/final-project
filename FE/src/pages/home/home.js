import React from "react";
import NavBar from "../../components/nav/nav";
import SectionHero from "../../components/section-Hero/section-Hero";
import TopDestinations from "../../components/top-destinations/top-destionations";
import MoreDestinations from "../../components/more-destinations/more-destinations";
import Footer from "../../components/footer/footer";
import SearchBar from "../../components/Search-bar/Search-bar";
import data from "../../json/hotel.json";

function Home() {
  return (
    <div className="home">
      <NavBar />
      <SectionHero />
      <TopDestinations handleData={data} />
      <SearchBar />
      <MoreDestinations handleData={data} />
      <Footer />
    </div>
  );
}

export default Home;
