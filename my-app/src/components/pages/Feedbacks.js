import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import Error from "./Error";
import Loading from "./Loading";
import "./styles/Feedbacks.css";

function Feedbacks() {
  const [feedbacks, setFeedbacks] = useState([]);
  const [loading, setLoading] = useState(false);
  const [hasError, setHasError] = useState({ hasError: false, message: "" });

  useEffect(() => {
    setLoading(true);
    fetch("http://127.0.0.1:8000/api/feedback")
      .then((response) => response.json())
      .then((json) => setFeedbacks(json))
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
              <h1 className="caption">Feedbacks</h1>
              {feedbacks.map((feedback, index) => (
                <p key={index} className="text">
                  • {feedback.text}
                </p>
              ))}
            </div>
          <div className="create-feedback-link-container">
            <Link className="create-feedback-link" to="/create-feedback">
              Leave feedback
            </Link>
          </div>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Feedbacks;
