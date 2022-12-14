import React, { useState } from "react";
import styles from "./Search-bar.module.css";
// import search from "../../assets/img/search-icon.png";
import { IconContext } from "react-icons";
import { BsSearch } from "react-icons/bs";
import classNames from "classnames/bind";
import { Link } from "react-router-dom";
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
const cx = classNames.bind(styles);

function SearchBar() {
  const myObject = ["Rooms", "Flats", "Hostels", "Villas"];
  const [startDate, setStartDate] = useState(new Date());
  const [endDate, setEndDate] = useState(new Date());
  // const [type, setType] = useState(myObject[0]);
  const [state, changeState] = useState({
    activeObject: myObject[0],
  });

  function handleClick(index, element) {
    changeState({ ...state, activeObject: myObject[index] });
    // setType(element);
  }

  function toggleActive(index) {
    if (myObject[index] === state.activeObject) {
      return cx("option-item", "active");
    } else {
      return cx("option-item");
    }
  }

  return (
    <div className={cx("search-bar")}>
      <div className={cx("find")}>
        <span>FIND</span>
      </div>
      <div className={cx("search-option")}>
        <ul className={cx("option-lists")}>
          {myObject.map((element, index) => (
            <li
              key={index}
              className={toggleActive(index)}
              onClick={() => {
                handleClick(index, element);
              }}
            >
              {element}
            </li>
          ))}
        </ul>
      </div>
      <div className={cx("search-field")}>
        <div className={cx("search-item")}>
          <span className={cx("search-title")}>Location</span>
          <input
            className={cx("search-action")}
            placeholder="Which city do you prefer?"
          />
        </div>
        <div className={cx("search-item")}>
          <span className={cx("search-title")}>Check In</span>
          <span className={cx("search-action")}>
            <DatePicker
              selected={startDate}
              onChange={(date) => setStartDate(date)}
            />
          </span>
        </div>
        <div className={cx("search-item")}>
          <span className={cx("search-title")}>Check Out</span>
          <span className={cx("search-action")}>
            <DatePicker
              selected={endDate}
              onChange={(date) => setEndDate(date)}
            />
          </span>
        </div>
        <div className={cx("search-item")}>
          <span className={cx("search-title")}>Guests</span>

          <input className={cx("search-action")} placeholder="Add guest" />
        </div>

        <Link to="/Search">
          <div className={cx("search-icon__container")}>
            <IconContext.Provider value={{ color: "#fff", size: "20px" }}>
              <i className={cx(".search-icon")}>
                <BsSearch />
              </i>
            </IconContext.Provider>
          </div>
        </Link>
      </div>
    </div>
  );
}

export default SearchBar;
