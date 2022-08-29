import React, { useState } from "react";
import "./subnav.css";

function Subnav() {
  const myObject = [
    "ABOUT",
    "NEIGHBORHOODS",
    "SCHOOLS",
    "JOBS",
    "LEISURE AND PARKS",
  ];

  const [state, changeState] = useState({
    activeObject: myObject[0],
  });

  function handleClick(index) {
    changeState({ ...state, activeObject: myObject[index] });
  }

  function toggleActive(index) {
    if (myObject[index] === state.activeObject) {
      return "subnav__item active";
    } else {
      return "subnav__item";
    }
  }

  return (
    <div className="subnav-wrapper">
      <ul className="subnav-list__items">
        {myObject.map((element, index) => (
          <li
            key={index}
            className={toggleActive(index)}
            onClick={() => {
              handleClick(index);
            }}
          >
            <span className="subnav__item--link">{element}</span>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default Subnav;
