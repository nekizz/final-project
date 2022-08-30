import React from "react";
import { Routes, Route } from "react-router-dom";
import "./App.css";
import Home from "./pages/home/home";
import Checkout from "./pages/checkout";
import Informations from "./components/information/informations";

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/checkout" element={<Checkout />} />
        <Route path="/Informations" element={<Informations />} />
      </Routes>
    </div>
  );
}

export default App;
