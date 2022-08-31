import styles from "./priceTable.module.css";
import classNames from "classnames/bind";
const cx = classNames.bind(styles);

function PriceTable() {
  return (
    <table className={cx("price-table")}>
      <tbody>
        <tr className={cx("price-table__row")}>
          <th className={cx("price-table__header")}>Rent</th>
          <th className={cx("price-table__header")}>Groceries</th>
          <th className={cx("price-table__header")}>Others</th>
          <th className={cx("price-table__header total")}>Total</th>
        </tr>
        <tr className={cx("price-table__row")}>
          <td className={cx("money")}> $1,800</td>
          <td className={cx("money")}> $1,600</td>
          <td className={cx("money")}> $2,200</td>
          <td className={cx("money")}> $5,600</td>
        </tr>
        <tr className={cx("price-table__row")}>
          <td className={cx("price-table__desc")}>
            This is for 3 bedrooms within city center{" "}
          </td>
          <td className={cx("price-table__desc")}>
            The average cost of Groceries for a family of 4{" "}
          </td>
          <td className={cx("price-table__desc")}>
            The average of monthly cost of Gas, Water, Electricity and Internet{" "}
          </td>
          <td className={cx("price-table__desc")}>
            This is the average of monthly spending for a family of four (4){" "}
          </td>
        </tr>
      </tbody>
    </table>
  );
}

export default PriceTable;
