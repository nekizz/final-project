import React, { useEffect, useState } from 'react';
import classNames from 'classnames/bind';
import styles from './Search.module.css';

import avatar from '../../assets/img/map.jpg';
import NavBar from '../../components/nav/nav';
import Footer from '../../components/footer/footer';
import CardList from '../../components/CardList/CardList';
import Card from '../../components/Card/Card';
import { Link } from 'react-router-dom';

import axios from 'axios';
const cx = classNames.bind(styles);
function Search() {
    const [data, setData] = useState([]);
    const handleFetchData = async () => {
        const response = await axios.get('./search.json');
        setData(response.data);
    };
    useEffect(() => {
        handleFetchData();
        // console.log(data);
    }, []);
    return (
        <div className={cx('search')}>
            <NavBar />
            <div className={cx('search-wrapper')}>
                <div className={cx('colleft')}>
                    <div className={cx('search-result')}>3 result found</div>
                    <CardList column>
                        {data.map((x) => (
                            <div key={x.id}>
                                <Link to="/Details">
                                    <Card featured mb300 name={x.name} address={x.address} thumbnail={x.thumbnail}></Card>
                                </Link>
                            </div>
                        ))}
                    </CardList>
                </div>
                <div className={cx('colright')}>
                    <img src={avatar} alt="he" />
                    <div className={cx('map-center__info')}>
                        <div className={cx('square')}></div>
                        <Card row featured className={cx('height-160px')}></Card>
                    </div>
                </div>
            </div>
            <Footer />
        </div>
    );
}

export default Search;
