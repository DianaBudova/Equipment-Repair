import { useState } from "react";
import "./styles/Dropdown.css";

function Dropdown({ selected, setSelected, fetchUrl, columnName }) {
  const [isActive, setIsActive] = useState(false);
  const [items, setItems] = useState([]);
  const [loading, setLoading] = useState(false);
  const [itemStyle, setItemStyle] = useState([]);
  const [hasError, setHasError] = useState({hasError: false, message: ""});

  let handleClick = () => {
    fetch(fetchUrl)
      .then((response) => response.json())
      .then((json) => setItems(json))
      .catch(() => {
        setHasError({hasError: true, message: "Oops... Something went wrong while loading data from database. Try again later."});
      });
  };

  let handleStyle = () => {
    const $startingPoint = 5;
    const $incrementStep = 40;
    const $loopEnd = $incrementStep * items.length + $startingPoint;
    for (let $i = $startingPoint; $i < $loopEnd; $i += $incrementStep) {
      itemStyle.push({ margin: `${$i}px 0 0 0` });
    }
  };

  if (hasError.hasError) {
    return <h1>{hasError.message}</h1>
  }

  return (
    <div className="dropdown">
      <div
        className="dropdown-button"
        onClick={() => {
          setLoading(true);
          setIsActive(!isActive);
          handleClick();
          setLoading(false);
        }}
      >
        {loading ? "Loading data..." : selected}
      </div>
      {isActive && (
        <>
          {handleStyle()}
          <div className="dropdown-content">
            {items.map((item, index) => (
              <div
                key={index}
                className="dropdown-item"
                style={itemStyle[index]}
                onClick={(e) => {
                  setSelected(e.target.textContent);
                  setIsActive(false);
                }}
              >
                <p>{item[columnName]}</p>
              </div>
            ))}
          </div>
        </>
      )}
    </div>
  );
}

export default Dropdown;
