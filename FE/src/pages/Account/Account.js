import React, { useState } from "react";
import styles from "./Account.module.css";
import NavBar from "../../components/nav/nav";
import Footer from "../../components/footer/footer";
import avatar from "../../assets/img/avatar.jpg";

import { AiOutlineCheck, AiFillStar, AiOutlineClose } from "react-icons/ai";

import classNames from "classnames/bind";
import Button from "../../components/Button/Button";

const cx = classNames.bind(styles);
function Account() {
  const [editProfile, setEditProfile] = useState(false);

  const handleEdit = () => {
    setEditProfile(!editProfile);
  };

  return (
    <div className={cx("account")}>
      <NavBar />
      <div className={cx("account-container")}>
        <div className={cx("col-left")}>
          <img className={cx("account-avatar")} src={avatar} alt="hieu" />
          <p className={cx("upload")}>Upload a Photo</p>
          <div className={cx("account-verification__container")}>
            <div className={cx("account-verification")}>
              Identity Verification
            </div>
            <div className={cx("account-verification__desc")}>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor.
            </div>
          </div>
          <div className={cx("account-status__container")}>
            <h2 className={cx("account-status")}>Hieu Le</h2>
            <div className={cx("email-status")}>
              <AiOutlineCheck />
              Email Confirmed
            </div>
            <div className={cx("mobile-status")}>
              <AiOutlineCheck />
              Mobile Confirmed
            </div>
          </div>
        </div>
        <div className={cx("col-right")}>
          <div className={cx("account-information")}>
            <h2 className={cx("account-name")}>Hello, John Doe</h2>
            <div className={cx("account-regis-date")}>Joined in 2021</div>
          </div>
          {!editProfile ? (
            <div className={cx("wrapper")}>
              <Button outline transparent onClick={handleEdit}>
                Edit Profile
              </Button>
              <div className={cx("account-review")}>
                <i>
                  <AiFillStar />
                </i>
                <div className={cx("review")}>0 reviews</div>
              </div>
              <div className={cx("reviewed-by")}>Reviewed By You</div>
            </div>
          ) : (
            <form id="account">
              <label>
                Email
                <br />
                <input className={cx("input")} type="email" name="email" />
              </label>
              <br />
              <label>
                Phone Number
                <br />
                <input className={cx("input")} type="text" name="phone" />
              </label>
              <br />
              <label>
                Location
                <br />
                <input className={cx("input")} type="text" name="location" />
              </label>
              <br />
              <label>
                Work
                <br />
                <input className={cx("input")} type="text" name="work" />
              </label>
              <br />
              <div className={cx("form-bottom")}>
                <div className={cx("form-desc")}>
                  All the required user information can be added here...
                </div>
                <div className={cx("button-container")}>
                  <Button
                    leftIcon={<AiOutlineClose />}
                    onClick={handleEdit}
                    transparent
                    className={cx("button")}
                  >
                    Cancel
                  </Button>
                  <Button
                    type="submit"
                    onClick={handleEdit}
                    fourth
                    className={cx("button")}
                  >
                    Save
                  </Button>
                </div>
              </div>
            </form>
          )}
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default Account;
