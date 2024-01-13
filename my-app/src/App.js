import "./App.css";
import { Routes, Route, BrowserRouter } from "react-router-dom";
import Home from "./components/pages/Home";
import About from "./components/pages/About";
import Categories from "./components/pages/Categories";
import Contacts from "./components/pages/Contacts";
import Feedbacks from "./components/pages/Feedbacks";
import Types from "./components/pages/Types";
import Guarantee from "./components/pages/Guarantee";
import CreateFeedback from "./components/pages/CreateFeedback";
import MakeOrder from "./components/pages/MakeOrder";
import NotFound from "./components/pages/NotFound";

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="*" element={<NotFound />} />
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/categories" element={<Categories />} />
          <Route path="/contacts" element={<Contacts />} />
          <Route path="/feedbacks" element={<Feedbacks />} />
          <Route path="/types" element={<Types />} />
          <Route path="/guarantee" element={<Guarantee />} />
          <Route path="/create-feedback" element={<CreateFeedback />} />
          <Route path="/make-order" element={<MakeOrder />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
