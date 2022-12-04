import React from "react";
import classNames from "classnames/bind";
import Button from "../Button/Button";
import styles from "./CardList.module.css";

const cx = classNames.bind(styles);

function CardList({
  children,
  desc,
  grid = false,
  button = false,
  column = false,
  ...passProps
}) {
  const props = { ...passProps };
  const classes = grid
    ? cx("card-list__grid")
    : column
    ? cx("card-list", "column")
    : cx("card-list");
  return (
    <div className={cx("card-list__container")} {...props}>
      {desc && <div className={cx("card-descrition")}>{desc}</div>}
      <div className={classes}>{children}</div>
      {button && (
        <Button medium black rounded className={cx("custom")}>
          View All Blogs
        </Button>
      )}
    </div>
  );
}

export default CardList;
