import React from "react";
import "./more-destinations.css";

import { Link } from "react-router-dom";

function MoreDestinations({ handleData }) {
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
        {handleData.map((destination, index) => (
          <div
            className={`more-destinations-item ${destination.class}`}
            key={index}
          >
            <Link to="/HomeBooking">
              <img
                src={destination.thumbnail}
                className="more-destinations-item__img"
                alt=""
              />
            </Link>
            <div className="more-destinations-info">
              <h3 className="more-destinations-state">{destination.name}</h3>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default MoreDestinations;
