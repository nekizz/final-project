import React from "react";
import classNames from "classnames/bind";
import styles from "./Card.module.css";
import { IconContext } from "react-icons";
import {
  AiOutlineHeart,
  AiFillHeart,
  AiOutlineStar,
  AiOutlineCar,
  AiOutlineClose,
} from "react-icons/ai";
import { IoAdd } from "react-icons/io5";
import { BiBed, BiBath } from "react-icons/bi";
import { MdPets } from "react-icons/md";
import { Link } from "react-router-dom";
const cx = classNames.bind(styles);

function Card({
  star = false,
  featured = false,
  row = false,
  guide = false,
  wishlists = false,
  add = false,
  desc,
  children,
  className,
  mb300,
  name,
  address,
  thumbnail,
  handleLike,
  id,
  ...props
}) {
  const data = {
    id,
    name,
    address,
    thumbnail,
  };
  const storageData = JSON.parse(localStorage.getItem("wishlist"));
  const itemExist = storageData
    ? storageData.find((exa) => exa.id === data.id)
    : false;

  let classes =
    featured && !guide && !row
      ? cx("feature-container")
      : featured && guide && !row
      ? cx("guide-container")
      : row && featured && !guide
      ? cx("feature-row")
      : wishlists && !row && !featured && !guide
      ? cx("wishlists-container")
      : cx("card-container");
  const cardClasses = cx("card", {
    featured,
    wishlists,
    row,
    add,
    mb300,
    [className]: className,
  });
  let src = `/Details/${id}`;
  if (add) {
    src = "/HomeBooking";
  } else if (wishlists) {
    src = "/Wishlists";
  }
  // const props = { onClick };
  return (
    <div className={cx("fragment")}>
      {!guide && !row && !wishlists && (
        <div
          onClick={() => {
            handleLike(data);
          }}
          className={cx("icon-heart")}
        >
          {itemExist ? (
            <IconContext.Provider value={{ color: "red" }}>
              <AiFillHeart />
            </IconContext.Provider>
          ) : (
            <AiOutlineHeart />
          )}
        </div>
      )}
      {wishlists && !add && (
        <i className={cx("close-icon")} {...props}>
          <AiOutlineClose />
        </i>
      )}
      <Link to={src}>
        <div
          className={cardClasses}
          style={{ backgroundImage: `url(${thumbnail})` }}
        >
          {star && (
            <div className={cx("star-rated")}>
              <AiOutlineStar />
              <AiOutlineStar />
              <AiOutlineStar />
              <AiOutlineStar />
              <AiOutlineStar />
            </div>
          )}

          {/* {wishlists && !add && (
            <i className={cx("close-icon")} {...props}>
              <AiOutlineClose />
            </i>
          )} */}
          {featured && !row && !guide && (
            <div className={cx("feature-information")}>
              <span className={cx("price")}>$ 1000 - 5000 USD</span>
              <div className={cx("circle-wrapper")}>
                <span className={cx("circle")}></span>
                <span className={cx("circle")}></span>
                <span className={cx("circle")}></span>
                <span className={cx("circle")}></span>
              </div>
            </div>
          )}
          {add ? (
            <i className={cx("add-icon")} {...props}>
              <IoAdd />
            </i>
          ) : (
            <div className={classes}>
              {wishlists ? (
                <div>
                  <h3 className={cx("wishlist-title")}>{children}</h3>
                  <span className={cx("wishlist-desc")}>{desc}</span>
                </div>
              ) : (
                <div className={cx("background")}>
                  <h3 className={cx("card-title")}>{name}</h3>
                  <span className={cx("card-desc")}>{address}</span>
                  {featured && !guide && (
                    <div className={cx("feature-icons")}>
                      <div className={cx("icon")}>
                        <BiBed />
                        <span>1</span>
                      </div>
                      <div className={cx("icon")}>
                        <BiBath />
                        <span>1</span>
                      </div>
                      <div className={cx("icon")}>
                        <AiOutlineCar />
                        <span>1</span>
                      </div>
                      <div className={cx("icon")}>
                        <MdPets />
                        <span>1</span>
                      </div>
                    </div>
                  )}
                </div>
              )}
            </div>
          )}

          {/* {featured && !guide && (
                        <div className={cx("feature-icons")}>
                          <div className={cx("icon")}>
                            <BiBed />
                            <span>1</span>
                          </div>
                          <div className={cx("icon")}>
                            <BiBath />
                            <span>1</span>
                          </div>
                          <div className={cx("icon")}>
                            <AiOutlineCar />
                            <span>1</span>
                          </div>
                          <div className={cx("icon")}>
                            <MdPets />
                            <span>1</span>
                          </div>
                        </div>
                      )}
                    </div>
                  )} */}
        </div>
      </Link>
    </div>
  );
}

export default Card;
