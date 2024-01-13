import React, { useEffect, useState } from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import Error from "./Error";
import Loading from "./Loading";
import "./styles/Home.css";

function Home() {
  const [brands, setBrands] = useState([]);
  const [loading, setLoading] = useState(false);
  const [hasError, setHasError] = useState({ hasError: false, message: "" });

  useEffect(() => {
    setLoading(true);
    fetch("http://127.0.0.1:8000/api/product_brand")
      .then((response) => response.json())
      .then((json) => setBrands(json))
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
          <h1 className="caption">Home</h1>
          <p className="text">
            Our company provides the possibility of repair of various techniques
            from different manufacturers.
          </p>
          <p className="text">Such as:</p>
          <>
            {brands.map((brand, index) => (
              <p key={index} className="text">
                • {brand.name}
              </p>
            ))}
            • etc.
          </>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Home;
