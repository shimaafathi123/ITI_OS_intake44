import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';
import Loader from './Loader';
import { Carousel } from 'react-bootstrap';
import './ProductDetail.css';
import axios from 'axios'; 

function ProductDetail() {
  const { productId } = useParams();
  const [product, setProduct] = useState(null);
  const [isLoading, setIsLoading] = useState(false);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchProduct = async () => {
      setIsLoading(true);
      setError(null);

      try {
        const response = await axios.get(`https://dummyjson.com/products/${productId}`); 
        setProduct(response.data);
      } catch (error) {
        setError(error);
      } finally {
        setIsLoading(false);
      }
    };

    fetchProduct();
  }, [productId]);

  return (
    <div className="container mt-5">
      {isLoading ? (
        <Loader />
      ) : error ? (
        <div className="alert alert-danger">Error fetching product: {error.message}</div>
      ) : product ? (
        <div>
          
          
          {product.images && product.images.length > 0 && ( 
            <Carousel>
              {product.images.map((imageUrl, index) => ( 
                <Carousel.Item key={index}>
                  <img
                    className="d-block w-100"
                    src={imageUrl}
                    alt={product.title}
                  />
                </Carousel.Item>
              ))}
            </Carousel>
            
          )}
          <h2>{product.title}</h2>
          <p className="lead">Price: ${product.price}</p>
          <p>{product.description}</p>
          <p>{product.category}</p>
        </div>
      ) : (
        <div className="alert alert-info">Product not found.</div>
      )}
    </div>
  );
}

export default ProductDetail;
