import React from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import "./styles/Contacts.css";

function Contacts() {
  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          <h1 className="caption">Contacts</h1>
          <div>
            <p className="text">☎</p>
            <p className="text">+380 (96) 012-34-56</p>
          </div>
          <div>
            <p className="text">⧗</p>
            <p className="text">Mon-Fri: 9:00-18:00</p>
            <p className="text">Sun-Sat: 10:00-16:00</p>
            <p className="text">Holidays: is not working</p>
          </div>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Contacts;
