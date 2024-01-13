import React from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import "./styles/Error.css";

function Error({ message }) {
  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          <h1 className="caption">{message}</h1>
          <img className="error-image" src="./images/warning.png" />
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Error;
