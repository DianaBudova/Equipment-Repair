import { useState } from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import Error from "./Error";
import InputSubmit from "../../elements/InputSubmit";
import Input from "../../elements/Input";
import "./styles/CreateFeedback.css";

function CreateFeedback() {
  const [feedbackText, setFeedbackText] = useState("");
  const [uploading, setUploading] = useState(false);
  const [hasError, setHasError] = useState({ hasError: false, message: "" });

  let handleSubmit = (e) => {
    setUploading(true);
    fetch(`http://127.0.0.1:8000/api/feedback?text=${feedbackText}`, {
      method: "POST",
    })
      .finally(setUploading(false))
      .catch(() => {
        setHasError({
          hasError: true,
          message:
            "Oops... Something went wrong while loading data from database. Try again later.",
        });
      });
  };

  if (hasError.hasError) {
    return <Error message={hasError.message} />;
  }

  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          {uploading ? (
            <h1 className="caption">Uploading data...</h1>
          ) : (
            <>
              <h1 className="caption">Create Feedback</h1>
              <form onSubmit={handleSubmit}>
                <Input
                  onChange={(e) => setFeedbackText(e.target.value)}
                  placeholder="Your feedback here..."
                />
                <br />
                <InputSubmit type="submit" value="Submit" />
              </form>
            </>
          )}
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default CreateFeedback;
