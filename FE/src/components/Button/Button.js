import { Link } from "react-router-dom";
import classNames from "classnames/bind";
import styles from "./Button.module.css";

const cx = classNames.bind(styles);

function Button({
  to,
  href,
  onClick,
  children,
  small = false,
  medium = false,
  large = false,
  primary = false,
  secondary = false,
  third = false,
  fourth = false,
  rounded = false,
  transparent = false,
  outline = false,
  leftIcon,
  rightIcon,
  className,
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
    medium,
    primary,
    secondary,
    third,
    fourth,
    rounded,
    transparent,
    outline,
    [className]: className,
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
