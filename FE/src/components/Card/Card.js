import React from 'react';
import classNames from 'classnames/bind';
import styles from './Card.module.css';
import avatar from '../../assets/img/avatar.jpg';

import { AiOutlineHeart, AiOutlineStar, AiOutlineCar, AiOutlineClose } from 'react-icons/ai';
import { IoAdd } from 'react-icons/io5';
import { BiBed, BiBath } from 'react-icons/bi';
import { MdPets } from 'react-icons/md';
const cx = classNames.bind(styles);

function Card({
    star = false,
    featured = false,
    row = false,
    guide = false,
    wishlists = false,
    add = false,
    onClick,
    desc,
    children,
    className,
    mb300,
}) {
    let classes =
        featured && !guide && !row
            ? cx('feature-container')
            : featured && guide && !row
            ? cx('guide-container')
            : row && featured && !guide
            ? cx('feature-row')
            : wishlists && !row && !featured && !guide
            ? cx('wishlists-container')
            : cx('card-container');
    const cardClasses = cx('card', {
        featured,
        wishlists,
        row,
        add,
        mb300,
        [className]: className,
    });

    const props = { onClick };
    return (
        <div className={cardClasses}>
            {star && (
                <div className={cx('star-rated')}>
                    <AiOutlineStar />
                    <AiOutlineStar />
                    <AiOutlineStar />
                    <AiOutlineStar />
                    <AiOutlineStar />
                </div>
            )}
            {!guide && !row && !wishlists && (
                <div className={cx('icon-heart')}>
                    <AiOutlineHeart />
                </div>
            )}
            {wishlists && !add && (
                <i className={cx('close-icon')} {...props}>
                    <AiOutlineClose />
                </i>
            )}
            {featured && !row && !guide && (
                <div className={cx('feature-information')}>
                    <span className={cx('price')}>$ 1000 - 5000 USD</span>
                    <div className={cx('circle-wrapper')}>
                        <span className={cx('circle')}></span>
                        <span className={cx('circle')}></span>
                        <span className={cx('circle')}></span>
                        <span className={cx('circle')}></span>
                    </div>
                </div>
            )}
            {add ? (
                <i className={cx('add-icon')} {...props}>
                    <IoAdd />
                </i>
            ) : (
                <div className={classes}>
                    {!featured && !wishlists && <img className={cx('card-avatar')} src={avatar} alt="hieu" />}
                    {wishlists ? (
                        <div>
                            <h3 className={cx('wishlist-title')}>{children}</h3>
                            <span className={cx('wishlist-desc')}>{desc}</span>
                        </div>
                    ) : (
                        <div>
                            <h3 className={cx('card-title')}>L'Etape Gasconne</h3>
                            <span className={cx('card-desc')}>11,Allemans-du-Dropt</span>
                        </div>
                    )}

                    {featured && !guide && (
                        <div className={cx('feature-icons')}>
                            <div className={cx('icon')}>
                                <BiBed />
                                <span>1</span>
                            </div>
                            <div className={cx('icon')}>
                                <BiBath />
                                <span>1</span>
                            </div>
                            <div className={cx('icon')}>
                                <AiOutlineCar />
                                <span>1</span>
                            </div>
                            <div className={cx('icon')}>
                                <MdPets />
                                <span>1</span>
                            </div>
                        </div>
                    )}
                </div>
            )}
        </div>
    );
}

export default Card;
