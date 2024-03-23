import React, { useState, useEffect } from 'react';
import axios from 'axios';
import ProductCard from './ProductCard';
import Loader from './Loader';

function ProductList() {
  const [products, setProducts] = useState([]);
  const [isLoading, setIsLoading] = useState(false);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchProducts = async () => {
      setIsLoading(true);
      setError(null);

      try {
        const response = await axios.get('https://dummyjson.com/products'); 
        setProducts(response.data.products);
      } catch (error) {
        setError(error);
      } finally {
        setIsLoading(false);
      }
    };

    fetchProducts();
  }, []);
 return (
  <div className="row">
    {isLoading ? (
      <Loader />
    ) : error ? (
      <div className="alert alert-danger">Error fetching products: {error.message}</div>
    ) : products.length > 0 ? (  
      products.map((product) => (
        <ProductCard key={product.id} product={product} />
      ))
    ) : (
      <p>No products found.</p> 
    )}
  </div>
);

}

export default ProductList;