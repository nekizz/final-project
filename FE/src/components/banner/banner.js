import React from "react";
import styles from "./banner.module.css";
import classNames from "classnames/bind";

const cx = classNames.bind(styles);

function Banner() {
  return (
    <div className={cx("banner-wrapper")}>
      <img
        className={cx("banner")}
        alt="hieu"
        src="https://selina-res.cloudinary.com/image/upload/if_iw_gt_2560,c_scale,w_2560/ar_3:2,c_crop/e_sharpen:80,q_auto:good/f_auto/v1/s-cf-1/xdw7oj4u3s4v/5XoyGXc77PFYQWJkXegZnr/603c00de9dad7914e79cec7e97cc1517/shutterstock_628792499.jpg"
      />
    </div>
  );
}
export default Banner;
