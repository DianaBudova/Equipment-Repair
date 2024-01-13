import React, { useEffect, useState } from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import Error from "./Error";
import Loading from "./Loading";
import Dropdown from "../../elements/Dropdown";
import InputSubmit from "../../elements/InputSubmit";
import Input from "../../elements/Input";
import "./styles/MakeOrder.css";

function MakeOrder() {
  const [name, setName] = useState("");
  const [surname, setSurname] = useState("");
  const [patronymic, setPatronymic] = useState("");
  const [phone, setPhone] = useState("");
  const [address, setAddress] = useState("");

  const [idProductRepair, setIdProductRepair] = useState(-1);
  const [idPriceDetail, setIdPriceDetail] = useState(-1);
  const [idProductBrand, setIdProductBrand] = useState(-1);
  const [idTypeRepair, setIdTypeRepair] = useState(-1);
  const [idCategory, setIdCategory] = useState(-1);

  const [selectedProductRepair, setSelectedProductRepair] = useState("...");
  const [selectedPriceDetail, setSelectedPriceDetail] = useState("...");
  const [selectedProductBrand, setSelectedProductBrand] = useState("...");
  const [selectedTypeRepair, setSelectedTypeRepair] = useState("...");
  const [selectedCategory, setSelectedCategory] = useState("...");

  const [priceProductRepair, setPriceProductRepair] = useState(0);
  const [pricePriceDetail, setPricePriceDetail] = useState(0);
  const [priceProductBrand, setPriceProductBrand] = useState(0);
  const [priceTypeRepair, setPriceTypeRepair] = useState(0);
  const [priceCategory, setPriceCategory] = useState(0);

  const [uploading, setUploading] = useState(false);
  const [hasError, setHasError] = useState({ hasError: false, message: "" });

  useEffect(() => {
    let $hasError = false;
    fetch(
      `http://127.0.0.1:8000/api/product_repair/by-name/${selectedProductRepair}`
    )
      .then((response) => response.json())
      .then((response) => {
        setIdProductRepair(response.id);
        setPriceProductRepair(Math.floor(Math.random() * 1000));
      })
      .catch(() => {
        $hasError = true;
      });
    fetch(
      `http://127.0.0.1:8000/api/price_detail/by-name/${selectedPriceDetail}`
    )
      .then((response) => response.json())
      .then((response) => {
        setIdPriceDetail(response.id);
        setPricePriceDetail(Math.floor(Math.random() * 1000));
      })
      .catch(() => {
        $hasError = true;
      });
    fetch(
      `http://127.0.0.1:8000/api/product_brand/by-name/${selectedProductBrand}`
    )
      .then((response) => response.json())
      .then((response) => {
        setIdProductBrand(response.id);
        setPriceProductBrand(Math.floor(Math.random() * 1000));
      })
      .catch(() => {
        $hasError = true;
      });
    fetch(`http://127.0.0.1:8000/api/type_repair/by-name/${selectedTypeRepair}`)
      .then((response) => response.json())
      .then((response) => {
        setIdTypeRepair(response.id);
        setPriceTypeRepair(Math.floor(Math.random() * 1000));
      })
      .catch(() => {
        $hasError = true;
      });
    fetch(`http://127.0.0.1:8000/api/category/by-name/${selectedCategory}`)
      .then((response) => response.json())
      .then((response) => {
        setIdCategory(response.id);
        setPriceCategory(Math.floor(Math.random() * 1000));
      })
      .catch(() => {
        $hasError = true;
      });
    if ($hasError) {
      setHasError({
        hasError: true,
        message:
          "Oops... Something went wrong while loading data from database. Try again later.",
      });
    }
  }, [
    selectedProductRepair,
    selectedPriceDetail,
    selectedProductBrand,
    selectedTypeRepair,
    selectedCategory,
  ]);

  let handleSubmit = (e) => {
    setUploading(true);
    if (
      name === "" ||
      surname === "" ||
      patronymic === "" ||
      phone === "" ||
      address === "" ||
      idProductRepair === -1 ||
      idPriceDetail === -1 ||
      idProductBrand === -1 ||
      idTypeRepair === -1 ||
      idCategory === -1
    ) {
      setHasError({ hasError: true, message: "All fields are required" });
    }
    let $summaryPrice = priceProductRepair + pricePriceDetail + priceProductBrand + priceTypeRepair + priceCategory;
    fetch(
      `http://127.0.0.1:8000/api/order?user_name=${name}&user_surname=${surname}&user_patronymic=${patronymic}&user_phone=${phone}&user_address=${address}&product_repair_id=${idProductRepair}&price_detail_id=${idPriceDetail}&product_brand_id=${idProductBrand}&type_repair_id=${idTypeRepair}&category_id=${idCategory}&status_id=2&summaryPrice=${$summaryPrice}`,
      {
        method: "POST",
      }
    )
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

  if (uploading) {
    return <Loading message="Uploading data..." />;
  }

  return (
    <Structure>
      <Header />
      <Body>
        <div className="body">
          <h1 className="caption">New Order</h1>
          <form onSubmit={handleSubmit}>
            <div className="make-order-form-block">
              <h1>Introduce yourself</h1>
              <div className="make-order-form-input">
                <span>Your name: </span>
                <Input onChange={(e) => setName(e.target.value)} />
              </div>
              <div className="make-order-form-input">
                <span>Your surname: </span>
                <Input onChange={(e) => setSurname(e.target.value)} />
              </div>
              <div className="make-order-form-input">
                <span>Your patronymic: </span>
                <Input onChange={(e) => setPatronymic(e.target.value)} />
              </div>
              <div className="make-order-form-input">
                <span>Your phone: </span>
                <Input onChange={(e) => setPhone(e.target.value)} />
              </div>
              <div className="make-order-form-input">
                <span>Your address: </span>
                <Input onChange={(e) => setAddress(e.target.value)} />
              </div>
            </div>
            <div className="make-order-form-block">
              <h1>And now adjust your breakage...</h1>
              <div className="make-order-form-input">
                <span>Product repair:</span>
                <Dropdown
                  className="dropdown"
                  selected={selectedProductRepair}
                  setSelected={setSelectedProductRepair}
                  fetchUrl="http://127.0.0.1:8000/api/product_repair"
                  columnName="name"
                />
              </div>
              <div className="make-order-form-input">
                <span>Price detail:</span>
                <Dropdown
                  className="dropdown"
                  selected={selectedPriceDetail}
                  setSelected={setSelectedPriceDetail}
                  fetchUrl="http://127.0.0.1:8000/api/price_detail"
                  columnName="detail"
                />
              </div>
              <div className="make-order-form-input">
                <span>Product brand:</span>
                <Dropdown
                  className="dropdown"
                  selected={selectedProductBrand}
                  setSelected={setSelectedProductBrand}
                  fetchUrl="http://127.0.0.1:8000/api/product_brand"
                  columnName="name"
                />
              </div>
              <div className="make-order-form-input">
                <span>Type repair:</span>
                <Dropdown
                  className="dropdown"
                  selected={selectedTypeRepair}
                  setSelected={setSelectedTypeRepair}
                  fetchUrl="http://127.0.0.1:8000/api/type_repair"
                  columnName="name"
                />
              </div>
              <div className="make-order-form-input">
                <span>Category:</span>
                <Dropdown
                  className="dropdown"
                  selected={selectedCategory}
                  setSelected={setSelectedCategory}
                  fetchUrl="http://127.0.0.1:8000/api/category"
                  columnName="name"
                />
              </div>
            </div>
            <InputSubmit type="submit" value="Submit" />
          </form>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default MakeOrder;
