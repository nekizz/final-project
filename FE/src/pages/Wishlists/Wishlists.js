import React, { useState } from "react";
import styles from "./Wishlists.module.css";
import NavBar from "../../components/nav/nav";
import Footer from "../../components/footer/footer";
import Card from "../../components/Card/Card";

import classNames from "classnames/bind";

const cx = classNames.bind(styles);
function Wishlists() {
  const [wishlist, setWishlist] = useState([
    {
      id: 1,
      title: "hieule",
      desc: "ko yeu mot ai",
    },
    {
      id: 2,
      title: "hieule",
      desc: "ko yeu mot ai",
    },
    {
      id: 3,
      title: "hieule",
      desc: "ko yeu mot ai",
    },
  ]);
  const addWishLists = () => {
    let id = 3;
    if (wishlist.length > 0) {
      id = wishlist[wishlist.length - 1].id + 1;
    }
    setWishlist([...wishlist, { title: "dmm", desc: "kaka", id: id }]);
  };

  const removeWishLists = (id) => {
    const newWishList = wishlist.filter((list) => list.id !== id);
    setWishlist(newWishList, ...wishlist);
  };

  return (
    <div className={cx("wishlists")}>
      <NavBar />
      <div className={cx("top-wishlists")}>
        <h2>Wishlists</h2>
        <div className={cx("wishlists-container")}>
          <Card add wishlists onClick={() => addWishLists()} />
          {wishlist.map((list) => (
            <Card
              key={list.id}
              wishlists
              desc={list.desc}
              onClick={() => removeWishLists(list.id)}
            >
              {list.title}
            </Card>
          ))}
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default Wishlists;
