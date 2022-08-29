import React from 'react';
import './informations.css';
import { Paper, Grid } from '@mui/material';
import { styled } from '@mui/material/styles';

// const Item = styled(Paper)(({ theme }) => ({
//     backgroundColor: theme.palette.mode === 'dark' ? '#1A2027' : '#fff',
//     ...theme.typography.body2,
//     padding: theme.spacing(1),
//     textAlign: 'center',
//     color: theme.palette.text.secondary,
// }));

function Informations() {
    return (
        <div className="container">
            <div className="columnleft">
                <div>
                    <ul id="subnav">
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#neighborhoods">Neighborhoods</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="#leisureandparks">Leisure and parks</a>
                        </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ipsum purus, bibendum sit amet vulputate eget, porta semper
                        ligula. Donec bibendum vulputate erat, ac fringilla mi finibus nec. Donec ac dolor sed dolor porttitor blandit vel vel purus.
                        Fusce vel malesuada ligula. Nam quis vehicula ante, eu finibus est. Proin ullamcorper fermentum orci, quis finibus massa. Nunc
                        lobortis, massa ut rutrum ultrices, metus metus finibus ex, sit amet facilisis neque enim sed neque. Quisque accumsan metus
                        vel maximus consequat. Suspendisse lacinia tellus a libero volutpat maximus. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nullam ipsum purus, bibendum sit amet vulputate eget, porta semper ligula. Donec bibendum vulputate erat, ac
                        fringilla mi finibus nec. Donec ac dolor sed dolor porttitor blandit vel vel purus. Fusce vel malesuada ligula. Nam quis
                        vehicula ante, eu finibus est. Proin ullamcorper fermentum orci, quis finibus massa. Nunc lobortis, massa ut rutrum ultrices,
                        metus metus finibus ex, sit amet facilisis neque enim sed neque. Quisque accumsan metus vel maximus consequat. Suspendisse
                        lacinia tellus a libero volutpat maximus.
                    </p>
                </div>
                <div>
                    <p className="type"> Articles about paraty </p>
                    <img src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0" />
                    <img src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0" />
                    <img src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0" />
                </div>
            </div>

            <div className="columnright">
                <table className="table">
                    <tr>
                        <th>City Size</th>
                        <th>Weather</th>
                        <th>Safety</th>
                    </tr>
                    <tr>
                        <td id=""> 35,730</td>
                        <td id=""> High - 29F</td>
                        <td id=""> 4,8</td>
                    </tr>
                </table>
                <div className="photos">
                    <img src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0" />
                    <img src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0" />
                    <img src="https://th.bing.com/th/id/R.0f225caca3823e89ba511949c5b47e29?rik=hjrO3mgTs4BQrA&pid=ImgRaw&r=0" />
                </div>

                <div className="price">
                    <p className="type"> Monthly spend for a family of 4</p>
                    <table className="table">
                        <tr>
                            <th>Rent</th>
                            <th>Groceries</th>
                            <th>Others</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td className="money"> $1,800</td>
                            <td className="money"> $1,600</td>
                            <td className="money"> $2,200</td>
                            <td className="money"> $5,600</td>
                        </tr>
                        <tr>
                            <td>This is for 3 bedrooms within city center </td>
                            <td>The average cost of Groceries for a family of 4 </td>
                            <td>The average of monthly cost of Gas, Water, Electricity and Internet </td>
                            <td>This is the average of monthly spending for a family of four (4) </td>
                        </tr>
                    </table>
                    <p className="type"> Monthly spend for a individual</p>
                    <table className="table">
                        <tr>
                            <th>Rent</th>
                            <th>Groceries</th>
                            <th>Others</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td id="money"> $1,800</td>
                            <td id="money"> $1,600</td>
                            <td id="money"> $2,200</td>
                            <td id="money"> $5,600</td>
                        </tr>
                        <tr>
                            <td>This is for 3 bedrooms within city center </td>
                            <td>The average cost of Groceries for a family of 4 </td>
                            <td>The average of monthly cost of Gas, Water, Electricity and Internet </td>
                            <td>This is the average of monthly spending for a family of four (4) </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    );
}
export default Informations;
