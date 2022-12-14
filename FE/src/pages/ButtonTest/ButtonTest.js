import React from "react";
import classNames from "classnames/bind";
import styles from "./ButtonTest.module.css";

import Button from "../../components/Button/Button";

const cx = classNames.bind(styles);

function ButtonTest() {
  return (
    <div className={cx("button")}>
      <Button primary>hieu</Button>
      <Button secondary>hieu</Button>
      <Button third>hieu</Button>
      <Button primary rounded>
        hieu
      </Button>
      <Button transparent>hieu</Button>
      <Button transparent outline>
        hieu
      </Button>
    </div>
  );
}

export default ButtonTest;
