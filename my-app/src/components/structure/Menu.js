import React from "react";
import { NavLink } from "react-router-dom";
import "./styles/Menu.css";

function Menu() {
    return (
        <div className="menu">
            <NavLink className="link" to="/">Home</NavLink>
            <NavLink className="link" to="/about">About</NavLink>
            <NavLink className="link" to="/categories">Categories</NavLink>
            <NavLink className="link" to="/contacts">Contacts</NavLink>
            <NavLink className="link" to="/feedbacks">Feedbacks</NavLink>
            <NavLink className="link" to="/types">Types</NavLink>
            <NavLink className="link" to="/guarantee">Guarantee</NavLink>
            <NavLink className="link" to="/make-order">Make Order</NavLink>
            <NavLink className="link" to="/documentation">Documentation</NavLink>
        </div>
    );
}

export default Menu;