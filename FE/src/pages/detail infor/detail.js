import React from "react";
import Banner from "../../components/banner/banner";
import NavBar from "../../components/nav/nav";
import Informations from "../../components/information/informations";
import Footer from "../../components/footer/footer";
function DetailInfor() {
  return (
    <div className="detail-infor">
      <NavBar />
      <Banner />
      <Informations />
      <Footer />
    </div>
  );
}
export default DetailInfor;
