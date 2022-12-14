import React from "react";
import styles from "./Wishlists.module.css";
import NavBar from "../../components/nav/nav";
import Footer from "../../components/footer/footer";
import Card from "../../components/Card/Card";

import classNames from "classnames/bind";

import Button from "../../components/Button/Button";

const cx = classNames.bind(styles);
function Wishlists({ wishlist, handleRemove, clearAll }) {
  return (
    <div className={cx("wishlists")}>
      <NavBar />
      <div className={cx("top-wishlists")}>
        <div className={cx("top-container")}>
          <h2>Wishlists</h2>
          <Button onClick={clearAll} medium textRed rounded>
            Clear All
          </Button>
        </div>
        <div className={cx("wishlists-container")}>
          <Card add wishlists />

          {wishlist.map((list) => (
            <Card
              key={list.id}
              wishlists
              desc={list.address}
              onClick={() => handleRemove(list.id)}
              thumbnail={list.thumbnail}
            >
              {list.name}
            </Card>
          ))}
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default Wishlists;
