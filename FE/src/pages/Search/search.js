import React from "react";
import classNames from "classnames/bind";
import styles from "./Search.module.css";

import avatar from "../../assets/img/map.jpg";
import NavBar from "../../components/nav/nav";
import Footer from "../../components/footer/footer";
import CardList from "../../components/CardList/CardList";
import Card from "../../components/Card/Card";

const cx = classNames.bind(styles);

function Search() {
  return (
    <div className={cx("search")}>
      <NavBar />
      <div className={cx("search-wrapper")}>
        <div className={cx("colleft")}>
          <div className={cx("search-result")}>10 result found</div>
          <CardList column>
            <Card featured mb300></Card>
            <Card featured mb300></Card>
            <Card featured mb300></Card>
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
