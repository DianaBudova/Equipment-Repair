import React from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import "./styles/Guarantee.css";

function Guarantee() {
  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          <h1 className="caption">Guarantee</h1>
          <h2>**1. Standard Warranty**</h2>
          <p className="text">
            All repairs carried out by our team are covered by a 90-day
            warranty. If the same issue reoccurs within this period, we will fix
            it free of charge.
          </p>
          <h2>**2. Exceptions**</h2>
          <p className="text">
            The warranty does not cover issues caused by accidental damage,
            misuse, or any alterations made post-repair.
          </p>
          <h2>**3. Parts**</h2>
          <p className="text">
            All parts used for repairs are covered by the manufacturer's
            warranty. If a part fails due to a manufacturing defect within the
            warranty period, it will be replaced at no cost.
          </p>
          <h2>**4. Data Loss**</h2>
          <p className="text">
            While we take utmost care during repairs, we are not responsible for
            any data loss. We recommend backing up your device before submitting
            it for repair.
          </p>
          <h2>**5. Claiming Warranty**</h2>
          <p className="text">
            To claim warranty, please contact our customer service with your
            repair receipt and a description of the issue.
          </p>
          <h1 className="caption">
            Please note that this warranty is subject to our full terms and
            conditions.
          </h1>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Guarantee;
