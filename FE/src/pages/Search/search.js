import React from "react";
import classNames from "classnames/bind";
import styles from "./Search.module.css";

import avatar from "../../assets/img/map.jpg";
import NavBar from "../../components/nav/nav";
import Footer from "../../components/footer/footer";
import CardList from "../../components/CardList/CardList";
import Card from "../../components/Card/Card";
import { Link } from "react-router-dom";

import data from "../../json/search.json";
const cx = classNames.bind(styles);
function Search() {
  return (
    <div className={cx("search")}>
      <NavBar />
      <div className={cx("search-wrapper")}>
        <div className={cx("colleft")}>
          <div className={cx("search-result")}>3 result found</div>
          <CardList column>
            {data.map((x) => (
              <Link className={cx("box-shadow")} key={x.id} to="/Details">
                <Card
                  featured
                  mb300
                  name={x.name}
                  address={x.address}
                  thumbnail={x.thumbnail}
                ></Card>
              </Link>
            ))}
          </CardList>
        </div>
        <div className={cx("colright")}>
          <img src={avatar} alt="he" />
          <div className={cx("map-center__info")}>
            <div className={cx("square")}></div>
            <Card row featured className={cx("height-160px")}></Card>
          </div>
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default Search;
