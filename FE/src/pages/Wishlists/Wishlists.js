import React, { useState } from 'react';
import styles from './Wishlists.module.css';
import NavBar from '../../components/nav/nav';
import Footer from '../../components/footer/footer';
import Card from '../../components/Card/Card';

import classNames from 'classnames/bind';

const cx = classNames.bind(styles);
function Wishlists() {
    const [wishlist, setWishlist] = useState([
        {
            id: 1,
            title: '6 Continents Apartments by Prague Residences',
            desc: ' Husova 12, Prague, 11000, Czech Republic ',
        },
        {
            id: 2,
            title: 'Hotel Libero',
            desc: 'Plzeňská 577/25 577/25, Prague, 150 00, Czech Republic',
        },
        {
            id: 3,
            title: 'Old Town Square Apartments',
            desc: ' Masná 20, Prague, 110 00, Czech Republic',
        },
    ]);
    const addWishLists = () => {
        let id = 3;
        if (wishlist.length > 0) {
            id = wishlist[wishlist.length - 1].id + 1;
        }
        setWishlist([...wishlist, { title: 'New hotel', desc: 'Descrition', id: id }]);
    };

    const removeWishLists = (id) => {
        const newWishList = wishlist.filter((list) => list.id !== id);
        setWishlist(newWishList, ...wishlist);
    };

    return (
        <div className={cx('wishlists')}>
            <NavBar />
            <div className={cx('top-wishlists')}>
                <h2>Wishlists</h2>
                <div className={cx('wishlists-container')}>
                    <Card add wishlists onClick={() => addWishLists()} />
                    {wishlist.map((list) => (
                        <Card key={list.id} wishlists desc={list.desc} onClick={() => removeWishLists(list.id)}>
                            {list.title}
                        </Card>
                    ))}
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default Wishlists;
