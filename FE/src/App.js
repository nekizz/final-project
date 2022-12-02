import React from "react";
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

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/checkout" element={<Checkout />} />
        <Route path="/Details" element={<Details />} />
        <Route path="/HomeBooking" element={<HomeBooking />} />
        <Route path="/Search" element={<Search />} />
        <Route path="/SignUp" element={<SignUp />} />
        <Route path="/Login1" element={<Login1 />} />
        <Route path="/ButtonTest" element={<ButtonTest />} />
        <Route path="/Account" element={<Account />} />
        <Route path="/Wishlists" element={<Wishlists />} />
        <Route path="/ReservationForm" element={<ReservationForm />} />
      </Routes>
    </div>
  );
}

export default App;
