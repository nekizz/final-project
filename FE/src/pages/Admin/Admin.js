import React from 'react';
import styles from './Admin.module.css';
import '@fontsource/mulish'; // Import font
import classNames from 'classnames/bind';

const cx = classNames.bind(styles);
const customer = [
    { id: 1, detail: 'Wasif Hotel', update: '5 days ago', customername: 'Wasif', date: '25/10/2022', hour: '6:30 PM', status: 'Approve' },
    { id: 2, detail: 'Ali', update: '3 days ago', customername: 'Ali', date: '05/1/2022', hour: '6:30 PM', status: 'Cancel' },
    { id: 3, detail: 'Saad', update: '2 days ago', customername: 'Saad', date: '09/10/2021', hour: '6:30 PM', status: 'Approve' },
    { id: 4, detail: 'Asad', update: '1 days ago', customername: 'Asad', date: '01/03/2023', hour: '6:30 PM', status: 'Pending' },
];

function Admin() {
    const header = Object.keys(customer[0]);
    console.log(header);
    return (
        <div className={cx('wrapper')}>
            <aside>Sidebar</aside>
            <main>
                <nav> Management Booking Request </nav>
                <div className={cx('table-container')}>
                    <table>
                        <tbody>
                            <tr>
                                <th> Id </th>
                                <th> Details</th>
                                <th> Customer Name </th>
                                <th> Date </th>
                                <th> Status </th>
                            </tr>

                            {customer.map((cst) => (
                                <tr key={cst.id} className={cx('customer')}>
                                    <td>{cst.id}</td>
                                    <td>
                                        <tr>{cst.detail}</tr>
                                        <tr>{cst.update}</tr>
                                    </td>
                                    <td>
                                        <tr>{cst.customername}</tr>
                                        <tr>{cst.update}</tr>
                                    </td>
                                    <td>
                                        <tr>{cst.date}</tr>
                                        <tr>{cst.hour}</tr>
                                    </td>
                                    <td>{cst.status}</td>
                                    <td> icon </td>
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
