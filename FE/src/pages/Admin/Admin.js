import React from 'react';
import styles from './Admin.module.css';

import classNames from 'classnames/bind';

const cx = classNames.bind(styles);
const customer = [
    { id: 1, detail: 'Wasif Hotel', update: '5 days ago', customername: 'Wasif', date: '25/10/2022', status: 'Approve' },
    { id: 2, detail: 'Ali', update: '3 days ago', customername: 'Ali', date: '05/1/2022', status: 'Cancel' },
    { id: 3, detail: 'Saad', update: '2 days ago', customername: 'Saad', date: '09/10/2021', status: 'Approve' },
    { id: 4, detail: 'Asad', update: '1 days ago', customername: 'Asad', date: '01/03/2023', status: 'Pending' },
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
                                {header.map((cst, index) => (
                                    <th className={cx('header')} key={index}>
                                        {cst}
                                    </th>
                                ))}
                            </tr>

                            {customer.map((cst) => (
                                <tr key={cst.id}>
                                    <td>{cst.id}</td>
                                    <td>
                                        <tr>{cst.detail}</tr>
                                        <tr>{cst.update}</tr>
                                    </td>
                                    <td>{cst.customername}</td>
                                    <td>{cst.date}</td>
                                    <td>{cst.status}</td>
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
