import React, { useEffect, useState } from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import Error from "./Error";
import Loading from "./Loading";
import "./styles/Categories.css";

function Categories() {
  const [categories, setCategories] = useState([]);
  const [loading, setLoading] = useState(false);
  const [hasError, setHasError] = useState({ hasError: false, message: "" });

  useEffect(() => {
    setLoading(true);
    fetch("http://127.0.0.1:8000/api/category")
      .then((response) => response.json())
      .then((json) => setCategories(json))
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
          <div>
            <h1 className="caption">Categories</h1>
            {categories.map((category, index) => (
              <p key={index} className="text">
                • {category.name}
              </p>
            ))}
          </div>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Categories;
