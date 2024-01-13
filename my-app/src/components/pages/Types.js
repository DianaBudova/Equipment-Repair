import React, { useEffect, useState } from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import Error from "./Error";
import Loading from "./Loading";
import "./styles/Types.css";

function Filters() {
  const [types, setTypes] = useState([]);
  const [repairs, setRepairs] = useState([]);
  const [loading, setLoading] = useState(false);
  const [hasError, setHasError] = useState({ hasError: false, message: "" });

  useEffect(() => {
    setLoading(true);
    fetch("http://127.0.0.1:8000/api/type_repair")
      .then((response) => response.json())
      .then((json) => setTypes(json))
      .catch(() => {
        setHasError({
          hasError: true,
          message:
            "Oops... Something went wrong while loading data from database. Try again later.",
        });
      });
    fetch("http://127.0.0.1:8000/api/product_repair")
      .then((response) => response.json())
      .then((json) => setRepairs(json))
      .finally(() => setLoading(false))
      .catch(() => {
        setHasError({
          hasError: true,
          message:
            "Oops... Something went wrong while loading data from database. Try again later.",
        });
      });
  }, []);

  if (hasError.hasError) {
    return <Error message={hasError.message} />;
  }

  if (loading) {
    return <Loading message="Loading data..." />;
  }

  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          <h1 className="caption">What can we help with?</h1>
          <p className="text">
            We can help you repair many appliances such as:
          </p>
          {repairs.map((repair, index) => (
            <p key={index} className="text">
              • {repair.name}
            </p>
          ))}
          <h1 className="caption">And also we can help with:</h1>
          {types.map((type, index) => (
            <p key={index} className="text">
              • {type.name}
            </p>
          ))}
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Filters;
