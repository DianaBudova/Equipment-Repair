import "./styles/Input.css";

function Input({ onChange, placeholder }) {
  return (
    <input
      className="input"
      onChange={onChange}
      placeholder={placeholder}
      spellcheck="false"
    ></input>
  );
}

export default Input;
