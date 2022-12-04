import React, { useState } from 'react';
import classNames from 'classnames/bind';
import styles from './ReservationFormFirst.module.css';
import ReservationItem from '../ReservationItem/ReservationItem';
import DatePicker from 'react-datepicker';
import { AiOutlineCalendar } from 'react-icons/ai';
import 'react-datepicker/dist/react-datepicker.css';
import Button from '../Button/Button';
const cx = classNames.bind(styles);

function ReservationFormFirst({ handleSetCheckBill }) {
    const [total, setTotal] = useState(1);
    const [startDate, setStartDate] = useState(new Date());
    const [endDate, setEndDate] = useState(new Date());
    const handleIncrease = () => {
        total < 4 && setTotal((prev) => prev + 1);
    };

    const handleDecrease = () => {
        total > 1 && setTotal((prev) => prev - 1);
    };
    return (
        <div className={cx('reservation-form-first')}>
            <div className={cx('add')}>Add Room</div>
            <div className={cx('reservation-item--container')}>
                <ReservationItem />
                <ReservationItem />
                <ReservationItem />
            </div>
            <div className={cx('bill')}>
                <div className={cx('col-3')}>
                    <h2 className={cx('top-heading')}>Details</h2>
                    <div className={cx('total-days')}>
                        <p className={cx('total')}>Total Days</p>
                        <div className={cx('minus')} onClick={handleDecrease}>
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.834 3.99756C7.41463 3.99756 3.83398 7.5782 3.83398 11.9976C3.83398 16.4169 7.41463 19.9976 11.834 19.9976C16.2533 19.9976 19.834 16.4169 19.834 11.9976C19.834 7.5782 16.2533 3.99756 11.834 3.99756ZM7.57592 13.2879C7.36302 13.2879 7.18882 13.1137 7.18882 12.9008V11.0943C7.18882 10.8814 7.36302 10.7072 7.57592 10.7072H16.092C16.305 10.7072 16.4791 10.8814 16.4791 11.0943V12.9008C16.4791 13.1137 16.305 13.2879 16.092 13.2879H7.57592Z"
                                    fill="black"
                                />
                            </svg>
                        </div>
                        <div className={cx('number')}>{total}</div>
                        <div className={cx('plus')} onClick={handleIncrease}>
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.834 3.99756C7.41463 3.99756 3.83398 7.5782 3.83398 11.9976C3.83398 16.4169 7.41463 19.9976 11.834 19.9976C16.2533 19.9976 19.834 16.4169 19.834 11.9976C19.834 7.5782 16.2533 3.99756 11.834 3.99756ZM16.4791 12.9008C16.4791 13.1137 16.305 13.2879 16.092 13.2879H13.1243V16.2556C13.1243 16.4685 12.9501 16.6427 12.7372 16.6427H10.9308C10.7179 16.6427 10.5437 16.4685 10.5437 16.2556V13.2879H7.57592C7.36302 13.2879 7.18882 13.1137 7.18882 12.9008V11.0943C7.18882 10.8814 7.36302 10.7072 7.57592 10.7072H10.5437V7.73949C10.5437 7.52659 10.7179 7.3524 10.9308 7.3524H12.7372C12.9501 7.3524 13.1243 7.52659 13.1243 7.73949V10.7072H16.092C16.305 10.7072 16.4791 10.8814 16.4791 11.0943V12.9008Z"
                                    fill="black"
                                />
                            </svg>
                        </div>
                    </div>
                    <div className={cx('type-container')}>
                        type
                        <select className={cx('select')} name="bedroom" id="bedroom">
                            <option value="1">1 bedroom</option>
                            <option value="2">2 bedroom</option>
                        </select>
                    </div>
                </div>
                <div className={cx('col-3')}>
                    <h2 className={cx('top-heading')}>Date</h2>
                    <div className={cx('date')}>
                        <div className={cx('check')}>Check-in:</div>
                        <label className={cx('label')}>
                            <AiOutlineCalendar />
                            <DatePicker selected={startDate} onChange={(date) => setStartDate(date)} />
                        </label>
                    </div>
                    <div className={cx('date')}>
                        <div className={cx('check')}>Check-out:</div>
                        <label className={cx('label')}>
                            <AiOutlineCalendar />
                            <DatePicker selected={endDate} onChange={(date) => setEndDate(date)} />
                        </label>
                    </div>
                </div>
                <div className={cx('col-3')}>
                    <h2 className={cx('top-heading')}>Price</h2>
                    <div className={cx('fee')}>
                        <p>x nights:</p>
                        <p>10000</p>
                    </div>
                    <div className={cx('fee')}>
                        <p>x nights:</p>
                        <p>10000</p>
                    </div>
                    <div className={cx('fee')}>
                        <p>x nights:</p>
                        <p>10000</p>
                    </div>
                    <div className={cx('fee', 'total-price')}>
                        <p>x nights:</p>
                        <p>10000</p>
                    </div>
                </div>
            </div>
            <Button medium black onClick={handleSetCheckBill} className={cx('custom-button')}>
                Continue
            </Button>
        </div>
    );
}

export default ReservationFormFirst;
