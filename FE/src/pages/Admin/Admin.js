import React from 'react';
import styles from './Admin.module.css';
import '@fontsource/mulish'; // Import font
import classNames from 'classnames/bind';
import { AiOutlineMore, AiOutlineSearch, AiOutlineFilter } from 'react-icons/ai';
import { BsSortUp, BsSortDownAlt } from 'react-icons/bs';

const cx = classNames.bind(styles);
const customer = [
    { id: 1, detail: 'Wasif Hotel', update: '5 days ago', customername: 'Wasif', date: '25/10/2022', time: '6:30 PM', status: 'Approve' },
    { id: 2, detail: 'Ali', update: '3 days ago', customername: 'Ali', date: '05/1/2022', time: '6:30 PM', status: 'Cancel' },
    { id: 3, detail: 'Saad', update: '2 days ago', customername: 'Saad', date: '09/10/2021', time: '6:30 PM', status: 'Approve' },
    { id: 4, detail: 'Asad', update: '1 days ago', customername: 'Asad', date: '01/03/2023', time: '6:30 PM', status: 'Pending' },
];

function Admin() {
    const header = Object.keys(customer[0]);
    console.log(header);
    return (
        <div className={cx('wrapper')}>
            <aside>Sidebar</aside>
            <main>
                <nav>
                    <h1> Management Booking Request </h1>
                </nav>
                <div className={cx('table-container')}>
                    <table>
                        <caption>
                            <div className={cx('sub_nav')}>
                                <h3> Details </h3>
                                <div>
                                    <AiOutlineSearch className={cx('icon')}></AiOutlineSearch>
                                    <AiOutlineFilter className={cx('icon')}></AiOutlineFilter>
                                    <BsSortUp className={cx('icon')}></BsSortUp>
                                    <BsSortDownAlt className={cx('icon')}></BsSortDownAlt>
                                </div>
                            </div>
                        </caption>
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Details</th>
                                <th> Customer Name </th>
                                <th> Date </th>
                                <th> Status </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {customer.map((cst) => (
                                <tr key={cst.id} className={cx('customer')}>
                                    <td>{cst.id}</td>
                                    <td>
                                        <tr>{cst.detail}</tr>
                                        <tr className={cx('sub_infor')}>{cst.update}</tr>
                                    </td>
                                    <td>
                                        <tr>{cst.customername}</tr>
                                        <tr className={cx('sub_infor')}>{cst.update}</tr>
                                    </td>
                                    <td>
                                        <tr>{cst.date}</tr>
                                        <tr className={cx('sub_infor')}>{cst.time}</tr>
                                    </td>
                                    <td>{cst.status}</td>
                                    <td>
                                        <AiOutlineMore></AiOutlineMore>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    );
}

export default Admin;
