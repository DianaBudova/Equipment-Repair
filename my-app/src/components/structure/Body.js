import React from "react";
import "./styles/Body.css";

export default function Body(props) {
  return <div className="body">{props.children}</div>;
}
