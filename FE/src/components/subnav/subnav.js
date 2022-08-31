import React, { Fragment, useState } from "react";
import "./subnav.css";

function Subnav({ information = false }) {
  const myObject = [
    "ABOUT",
    "NEIGHBORHOODS",
    "SCHOOLS",
    "JOBS",
    "LEISURE AND PARKS",
  ];

  const [type, setType] = useState(myObject[0]);
  const [state, changeState] = useState({
    activeObject: myObject[0],
  });

  function handleClick(index, element) {
    changeState({ ...state, activeObject: myObject[index] });
    setType(element);
  }

  function toggleActive(index) {
    if (myObject[index] === state.activeObject) {
      return "subnav__item active";
    } else {
      return "subnav__item";
    }
  }

  return (
    <Fragment>
      <div
        className={information ? "subnav-wrapper" : "subnav-wrapper__checkout"}
      >
        <ul className="subnav-list__items">
          {myObject.map((element, index) => (
            <li
              key={index}
              className={toggleActive(index)}
              onClick={() => {
                handleClick(index, element);
              }}
            >
              <span className="subnav__item--link">{element}</span>
            </li>
          ))}
        </ul>
      </div>
      {information ? <p className="columnleft-desc">{type}</p> : null}
    </Fragment>
  );
}

export default Subnav;
