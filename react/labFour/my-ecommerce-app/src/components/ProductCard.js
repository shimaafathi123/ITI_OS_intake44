import React from 'react';
import { Link } from 'react-router-dom';
import Bootstrap from 'bootstrap/dist/css/bootstrap.min.css'; 
import './ProductCard.css';
function ProductCard({ product }) {
  const { id, title, price, category, thumbnail } = product;

  return (
    <div className="col-md-4 mb-4"> 
      <div className="card product-card"> 
        <img src={thumbnail} className="card-img-top" alt={title} />
        <div className="card-body">
          <h5 className="card-title">{title}</h5>
          <p className="card-text">Price: ${price}</p>
          <h5 className="card-category">Category: {category}</h5>
          <Link to={`/products/${id}`} className="btn btn-primary">
            View Details
          </Link>
        </div>
      </div>
    </div>
  );
}


export default ProductCard;
