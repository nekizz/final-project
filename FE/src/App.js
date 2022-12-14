import React, { useState } from "react";
import { Routes, Route } from "react-router-dom";
import "./App.css";
import Home from "./pages/home/home";
import Checkout from "./pages/checkout";
import Details from "./pages/Details/Details";
import HomeBooking from "./pages/Home-Booking/Home-Booking";
import Search from "./pages/Search/search";
import SignUp from "./pages/SignUp/SignUp";
import Login1 from "./pages/Login1/Login1";
import ButtonTest from "./pages/ButtonTest/ButtonTest";
import Account from "./pages/Account/Account";
import Wishlists from "./pages/Wishlists/Wishlists";
import ReservationForm from "./pages/Reservation-form/Reservation";
import ReservationStatus from "./pages/ReservationStatus/ReservationStatus";

function App() {
  const [wishlist, setWishList] = useState(() => {
    const storageData = JSON.parse(localStorage.getItem("wishlist"));

    return storageData ?? [];
  });
  const handleLike = (item) => {
    const itemExist = wishlist.find((exa) => exa.id === item.id);
    if (itemExist) {
      const newWishList = wishlist.filter((i) => i.id !== item.id);
      setWishList(() => {
        const jsonData = JSON.stringify(newWishList);
        localStorage.setItem("wishlist", jsonData);
        return newWishList;
      });
    } else {
      setWishList((prev) => {
        const newData = [...prev, item];

        const jsonData = JSON.stringify(newData);
        localStorage.setItem("wishlist", jsonData);
        return newData;
      });
    }
  };

  const handleRemove = (id) => {
    const newWishList = wishlist.filter((item) => item.id !== id);

    setWishList(() => {
      const jsonData = JSON.stringify(newWishList);
      localStorage.setItem("wishlist", jsonData);
      return newWishList;
    });
  };

  const clearAll = () => {
    setWishList(() => {
      const newData = [];
      localStorage.removeItem("wishlist");
      return newData;
    });
  };
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/checkout" element={<Checkout />} />
        <Route path="/Details/:id" element={<Details />} />
        <Route
          path="/HomeBooking"
          element={<HomeBooking handleLike={handleLike} />}
        />
        <Route path="/Search" element={<Search />} />
        <Route path="/SignUp" element={<SignUp />} />
        <Route path="/Login1" element={<Login1 />} />
        <Route path="/ButtonTest" element={<ButtonTest />} />
        <Route path="/Account" element={<Account />} />
        <Route
          path="/Wishlists"
          element={
            <Wishlists
              wishlist={wishlist}
              clearAll={clearAll}
              handleRemove={handleRemove}
            />
          }
        />
        <Route path="/ReservationForm" element={<ReservationForm />} />
        <Route path="/ReservationStatus" element={<ReservationStatus />} />
      </Routes>
    </div>
  );
}

export default App;
