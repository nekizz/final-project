import React from "react";
import styles from "./informations.module.css";
import Subnav from "../subnav/subnav";

import PriceTable from "../priceTable/priceTable";
import { IoIosPeople } from "react-icons/io";
import {
  BsFillCloudDrizzleFill,
  BsFillCloudSunFill,
  BsStar,
} from "react-icons/bs";
import classNames from "classnames/bind";
const cx = classNames.bind(styles);

// import { Paper, Grid } from '@mui/material';
// import { styled } from '@mui/material/styles';

// const Item = styled(Paper)(({ theme }) => ({
//     backgroundColor: theme.palette.mode === 'dark' ? '#1A2027' : '#fff',
//     ...theme.typography.body2,
//     padding: theme.spacing(1),
//     textAlign: 'center',
//     color: theme.palette.text.secondary,
// }));

function Informations() {
  return (
    <div className={cx("container")}>
      <div className={cx("columnleft")}>
        <Subnav information />
        <div>
          <p className={cx("type")}> Articles about paraty </p>
          <div className={cx("img-wrapper")}>
            <div className={cx("img-item")}>
              <img
                className={cx("img")}
                alt="hieule"
                src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0"
              />
              <div className={cx("img-information")}>
                <h2 className={cx("img-title")}>lorema</h2>
                <span className={cx("img-desription")}>
                  lorempasihecicoaisdofijw
                </span>
              </div>
            </div>
            <div className={cx("img-item")}>
              <img
                className={cx("img")}
                alt="hieule"
                src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0"
              />
              <div className={cx("img-information")}>
                <h2 className={cx("img-title")}>lorema</h2>
                <span className={cx("img-desription")}>
                  lorempasihecicoaisdofijw
                </span>
              </div>
            </div>
            <div className={cx("img-item")}>
              <img
                className={cx("img")}
                alt="hieule"
                src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0"
              />
              <div className={cx("img-information")}>
                <h2 className={cx("img-title")}>lorema</h2>
                <span className={cx("img-desription")}>
                  lorempasihecicoaisdofijw
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className={cx("columnright")}>
        <table className={cx("city-details")}>
          <tbody>
            <tr>
              <th className={cx("city-details__header")}>City Size</th>
              <th className={cx("city-details__header")}>Weather</th>
              <th className={cx("city-details__header")}>Safety</th>
            </tr>
            <tr>
              <td>
                <div className={cx("city-details__information")}>
                  <i className={cx("people-icon")}>
                    <IoIosPeople />
                  </i>
                  <span>
                    35,730 <br />
                    (2008)
                  </span>
                </div>
              </td>
              <td>
                <div className={cx("city-details__information")}>
                  <div className={cx("cloud-wrapper")}>
                    <i className={cx("cloud-drizzle-icon")}>
                      <BsFillCloudDrizzleFill />
                    </i>
                    <i className={cx("cloud-sun-icon")}>
                      <BsFillCloudSunFill />
                    </i>
                  </div>
                  <div>
                    High - 29°F <br /> Low - 29°F
                  </div>
                </div>
              </td>
              <td>
                <div className={cx("city-details__information")}>
                  <i className={cx("star-icon")}>
                    <BsStar />
                  </i>
                  4,8
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div className={cx("photos")}>
          <img
            className={cx("img-big")}
            alt="hieule"
            src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0"
          />
          <div className={cx("img-medium-container")}>
            <img
              className={cx("img-medium")}
              alt="hieule"
              src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0"
            />
            <img
              className={cx("img-medium")}
              alt="hieule"
              src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0"
            />
          </div>
        </div>

        <div className={cx("price")}>
          <p className={cx("type")}> Monthly spend for a family of 4</p>
          <PriceTable />
          <p className={cx("type")}> Monthly spend for a individual</p>
          <PriceTable />
        </div>
      </div>
    </div>
  );
}
export default Informations;
