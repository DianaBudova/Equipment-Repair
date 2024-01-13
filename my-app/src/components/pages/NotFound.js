import React from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import "./styles/NotFound.css";

function NotFound({ message }) {
  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          <h1 className="caption">Page not found :(</h1>
          <img className="not-found-image" src="./images/page404.png" />
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default NotFound;
