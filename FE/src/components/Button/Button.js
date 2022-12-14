import { Link } from "react-router-dom";
import classNames from "classnames/bind";
import styles from "./Button.module.css";

const cx = classNames.bind(styles);

function Button({
  to,
  href,
  children,
  small = false,
  medium = false,
  mediumx = false,
  large = false,
  primary = false,
  secondary = false,
  third = false,
  fourth = false,
  rounded = false,
  transparent = false,
  black = false,
  textRed = false,
  outline = false,
  textBlack = false,
  backGroundWhite = false,
  leftIcon,
  rightIcon,
  className,
  ...props
}) {
  let Comp = "button";

  if (to) {
    props.to = to;
    Comp = Link;
  } else if (href) {
    props.href = href;
    Comp = "a";
  }

  const classes = cx("wrapper", {
    medium,
    mediumx,
    large,
    primary,
    secondary,
    third,
    fourth,
    rounded,
    black,
    transparent,
    outline,
    textBlack,
    backGroundWhite,
    textRed,
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
