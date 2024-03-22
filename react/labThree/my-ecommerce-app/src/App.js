import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import ProductDetail from './components/ProductDeltail'
import ProductList from './components/ProductList'
import NotFound from './components/NotFound'


function App() {
  return (
    <Router>
      <div className="container">
        <header>
          <h1>My E-commerce App</h1>
        </header>
        <Routes>
          <Route path="/" element={<ProductList />} />
          <Route path="/products/:productId" element={<ProductDetail />} />
          <Route path="*" element={<NotFound />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;
