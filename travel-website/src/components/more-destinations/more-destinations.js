import React from "react";
import "./more-destinations.css";
import france from "../../assets/img/france.jpg";

const moreDestinations = [
  {
    class: "france",
    city: "Estaing",
    state: "France",
  },
  {
    class: "iceland",
    city: "Vík í Mýrda",
    state: "iceland",
  },
  {
    class: "norway",
    city: "Hamnoy village",
    state: "Norway",
  },
  {
    class: "jamaica",
    city: "Montego Bay",
    state: "JAMAICA",
  },
];

function MoreDestinations() {
  return (
    <div className="more-destinations">
      <div className="more-destinations__content">
        <h2 className="more-destinations__top">more</h2>
        <h2 className="more-destinations__dest">destinations</h2>
        <p className="more-destinations__desc">
          Your peace of mind doesn’t have to be tied to where everyone else is.
          We have a good number of travel and relocation destinations. Take your
          time and find the perfect one for you.
        </p>
      </div>

      <div className="more-destinations-container">
        {moreDestinations.map((destination, index) => (
          <div
            className={`more-destinations-item ${destination.class}`}
            key={index}
          >
            <img src={france} className="more-destinations-item__img" alt="" />
            <div className="more-destinations-info">
              <h3 className="more-destinations-state">{destination.state}</h3>
              <p className="more-destinations-city">{destination.city}</p>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default MoreDestinations;
