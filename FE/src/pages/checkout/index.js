import React from "react";
import NavBar from "../../components/nav/nav";
import Subnav from "../../components/subnav";
import CheckOutBody from "../../components/checkoutBody";

function Checkout() {
  return (
    <div className="checkout">
      <NavBar />
      <Subnav />
      <CheckOutBody />
    </div>
  );
}

export default Checkout;
