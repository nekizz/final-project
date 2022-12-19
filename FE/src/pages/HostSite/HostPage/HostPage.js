import React from "react";
import styles from "./HostPage.module.css";

import classNames from "classnames/bind";

const cx = classNames.bind(styles);
function HostPage() {
  return <div className={cx("host-page")}></div>;
}

export default HostPage;
