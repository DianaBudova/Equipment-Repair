import React from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import "./styles/About.css";

function About() {
  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          <h1 className="caption">About</h1>
          <p className="text">
            • Welcome to our company, where we specialize in repairing technical
            faults in various devices such as phones, computers, and more.
          </p>
          <p className="text">
            • Our team of experts is dedicated to providing you with the highest
            quality service, ensuring that your devices are back in top shape in
            no time. We understand the importance of technology in your daily
            life, and we strive to make the repair process as smooth and
            efficient as possible.
          </p>
          <p className="text">• Thank you for choosing us for your repair needs.</p>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default About;
