import React, { useEffect, useState } from "react";
import Structure from "../structure/Structure";
import Header from "../structure/Header";
import Body from "../structure/Body";
import Footer from "../structure/Footer";
import Error from "./Error";
import Loading from "./Loading";
import "./styles/Home.css";

function Documentation() {
  const [loading, setLoading] = useState(false);
  const [hasError, setHasError] = useState({ hasError: false, message: "" });

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
          <h1 className="caption">Documentation</h1>
          <h2>Role</h2>
          <p className="text">
            GET: /api/role
          </p>
          <p className="text">
            POST: /api/role
          </p>
          <p className="text">
            GET: /api/role/1
          </p>
          <p className="text">
            PATCH: /api/role/1
          </p>
          <p className="text">
            DELETE: /api/role/1
          </p>
          <h2>Order</h2>
          <p className="text">
            GET: /api/order
          </p>
          <p className="text">
            POST: /api/order
          </p>
          <p className="text">
            GET: /api/order/1
          </p>
          <p className="text">
            PATCH: /api/order/1
          </p>
          <p className="text">
            DELETE: /api/order/1
          </p>
          <h2>Message</h2>
          <p className="text">
            GET: /api/message
          </p>
          <p className="text">
            POST: /api/message
          </p>
          <p className="text">
            GET: /api/message/1
          </p>
          <p className="text">
            PATCH: /api/message/1
          </p>
          <p className="text">
            DELETE: /api/message/1
          </p>
          <h2>Category</h2>
          <p className="text">
            GET: /api/category
          </p>
          <p className="text">
            POST: /api/category
          </p>
          <p className="text">
            GET: /api/category/1
          </p>
          <p className="text">
            GET: /api/category/by-name/Diana
          </p>
          <p className="text">
            PATCH: /api/category/1
          </p>
          <p className="text">
            DELETE: /api/category/1
          </p>
          <h2>Status</h2>
          <p className="text">
            GET: /api/status
          </p>
          <p className="text">
            POST: /api/status
          </p>
          <p className="text">
            GET: /api/status/1
          </p>
          <p className="text">
            PATCH: /api/status/1
          </p>
          <p className="text">
            DELETE: /api/status/1
          </p>
          <h2>Price detail</h2>
          <p className="text">
            GET: /api/price_detail
          </p>
          <p className="text">
            POST: /api/price_detail
          </p>
          <p className="text">
            GET: /api/price_detail/1
          </p>
          <p className="text">
            GET: /api/price_detail/by-name/Detail1
          </p>
          <p className="text">
            PATCH: /api/price_detail/1
          </p>
          <p className="text">
            DELETE: /api/price_detail/1
          </p>
          <h2>Product repair</h2>
          <p className="text">
            GET: /api/product_repair
          </p>
          <p className="text">
            POST: /api/product_repair
          </p>
          <p className="text">
            GET: /api/product_repair/1
          </p>
          <p className="text">
            GET: /api/product_repair/by-name/Repair1
          </p>
          <p className="text">
            PATCH: /api/product_repair/1
          </p>
          <p className="text">
            DELETE: /api/product_repair/1
          </p>
          <h2>Product brand</h2>
          <p className="text">
            GET: /api/product_brand
          </p>
          <p className="text">
            POST: /api/product_brand
          </p>
          <p className="text">
            GET: /api/product_brand/1
          </p>
          <p className="text">
            GET: /api/product_brand/by-name/Brand1
          </p>
          <p className="text">
            PATCH: /api/product_brand/1
          </p>
          <p className="text">
            DELETE: /api/product_brand/1
          </p>
          <h2>Type repair</h2>
          <p className="text">
            GET: /api/type_repair
          </p>
          <p className="text">
            POST: /api/type_repair
          </p>
          <p className="text">
            GET: /api/type_repair/1
          </p>
          <p className="text">
            GET: /api/type_repair/by-name/Brand1
          </p>
          <p className="text">
            PATCH: /api/type_repair/1
          </p>
          <p className="text">
            DELETE: /api/type_repair/1
          </p>
          <h2>Feedback</h2>
          <p className="text">
            GET: /api/feedback
          </p>
          <p className="text">
            POST: /api/feedback
          </p>
          <p className="text">
            GET: /api/feedback/1
          </p>
          <p className="text">
            PATCH: /api/feedback/1
          </p>
          <p className="text">
            DELETE: /api/feedback/1
          </p>
        </div>
      </Body>
      <Footer />
    </Structure>
  );
}

export default Documentation;
