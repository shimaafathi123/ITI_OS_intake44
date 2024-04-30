import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import ProductDetail from './components/ProductDeltail'
import ProductList from './components/ProductList'
import NotFound from './components/NotFound'
import RegisterPage from './components/RegisterPage'

function App() {
  return (
    <Router>
      <div className="container">

        <Routes>
          <Route path="/" element={<ProductList />} />
          <Route path="/products/:productId" element={<ProductDetail />} />
          <Route path="*" element={<NotFound />} />
          <Route path="/register" element={<RegisterPage />} />

        </Routes>
      </div>
    </Router>
  );
}

export default App;
