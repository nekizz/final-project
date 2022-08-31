import { Link } from "react-router-dom";
import classNames from "classnames/bind";
import styles from "./Button.module.css";

const cx = classNames.bind(styles);

function Button({
  to,
  href,
  onClick,
  children,
  primary = false,
  secondary = false,
  leftIcon,
  rightIcon,
}) {
  let Comp = "button";
  const props = { onClick };

  if (to) {
    props.to = to;
    Comp = Link;
  } else if (href) {
    props.href = href;
    Comp = "a";
  }

  const classes = cx("wrapper", {
    primary,
    secondary,
  });

  return (
    <Comp className={classes} {...props}>
      {leftIcon && <span className={cx("icon")}>{leftIcon}</span>}
      <span className={cx("title")}>{children}</span>
      {rightIcon && <span className={cx("icon")}>{rightIcon}</span>}
    </Comp>
  );
}

export default Button;
