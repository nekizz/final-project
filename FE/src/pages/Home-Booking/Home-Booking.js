import React from "react";
import classNames from "classnames/bind";
import styles from "./Home-booking.module.css";
import Button from "../../components/Button/Button";
import { DiAndroid } from "react-icons/di";
import { IoLogoAndroid, IoLogoApple } from "react-icons/io";
import { AiOutlineSend } from "react-icons/ai";
import { IconContext } from "react-icons";
import avatar from "../../assets/img/avatar.jpg";

// import SectionHero from "../../components/section-Hero/section-Hero";

import Banner from "../../components/banner/banner";
import NavBar from "../../components/nav/nav";
import SearchBar from "../../components/Search-bar/Search-bar";
import Footer from "../../components/footer/footer";
import CardList from "../../components/CardList/CardList";
import Card from "../../components/Card/Card";
import SideSection from "../../components/side-section/side-section";

import data from "../../json/hotel.json";
const cx = classNames.bind(styles);
function HomeBooking({ handleLike }) {
  return (
    <div className="home-booking">
      <NavBar />
      <Banner />
      <SearchBar />
      <CardList desc="Latest on the property listing">
        {data.map((x) => (
          <Card
            key={x.id}
            id={x.id}
            name={x.name}
            address={x.address}
            thumbnail={x.thumbnail}
            handleLike={handleLike}
          />
        ))}
      </CardList>
      <CardList desc="Nearby Listed Properties">
        {data.map((x) => (
          <Card
            key={x.id}
            name={x.name}
            id={x.id}
            address={x.address}
            thumbnail={x.thumbnail}
            handleLike={handleLike}
          />
        ))}
      </CardList>
      <CardList desc="Top Rated Properties">
        {data.map((x) => (
          <Card
            key={x.id}
            id={x.id}
            star
            name={x.name}
            address={x.address}
            thumbnail={x.thumbnail}
            handleLike={handleLike}
          />
        ))}
      </CardList>
      <SideSection
        h3="Try Hosting With Us"
        span="Earn extra just by renting your property..."
      >
        Become A Host
      </SideSection>
      <CardList id="featured" grid desc="Featured Property on our list">
        <Card featured />

        <Card featured />

        <Card featured />

        <Card featured />

        <Card featured />

        <Card featured />
      </CardList>
      <SideSection
        h3="Browse For More Properties"
        span="Explore properties by their categories/types..."
      >
        Find A Property
      </SideSection>
      <CardList button grid desc="Property Rental Guides & Tips">
        <Card guide featured />
        <Card guide featured />
        <Card guide featured />
      </CardList>
      <div className={cx("doawnload-section")}>
        <div className={cx("doawnload-container")}>
          <h2>Download Our Mobile App</h2>
          <span>Available for free these platforms</span>
          <div className={cx("button-container")}>
            <Button leftIcon={<IoLogoAndroid />} medium third>
              PlayStore
            </Button>
            <Button leftIcon={<IoLogoApple />} medium third>
              AppleStore
            </Button>
          </div>
        </div>
        <div className={cx("icon-download")}>
          <DiAndroid />
        </div>
      </div>
      <div className={cx("about-section")}>
        <CardList column desc="Discovery More About Property Rental">
          <span>lorem</span>
          <div>
            <Button medium transparent>
              Ask A Question
            </Button>
            <Button medium transparent>
              Find A Property
            </Button>
          </div>
          <Button medium black rounded className={cx("discovery-more")}>
            Discovery More
          </Button>
        </CardList>
        <div className={cx("about__img-container")}>
          <img className={cx("about__img")} src={avatar} alt="hieu" />
        </div>
      </div>
      <div className={cx("newsletter")}>
        <div className={cx("newsletter__information")}>
          <h3 className={cx("newsletter__title")}>newsletter</h3>
          <span className={cx("newsletter__desc")}>Stay Up To Date</span>
        </div>
        <div className={cx("input-container")}>
          <input
            className={cx("input-field")}
            placeholder="Search accounts and videos"
          />

          <IconContext.Provider value={{ color: "#fff" }}>
            <div className={cx("send__container")}>
              <AiOutlineSend />
            </div>
          </IconContext.Provider>
        </div>
      </div>
      <Footer />
    </div>
  );
}
export default HomeBooking;
