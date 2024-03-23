import React from 'react';
import { Provider } from 'react-redux';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import {store} from './store';
import RegisterPage from './components/RegisterPage';
import SubmittedValuesPage from './components/SubmittedValuesPage';
import ProductList from './components/ProductList'
import ProductDetail from './components/ProductDeltail'
import NotFound from './components/NotFound'


const App = () => {
  return (
    <Provider store={store}>
      <BrowserRouter>
        <Routes>
          <Route path="/register" element={<RegisterPage />} />
          <Route path="/submitted" element={<SubmittedValuesPage />} />
          <Route path="/" element={<ProductList />} />
          <Route path="/products/:productId" element={<ProductDetail />} />
          <Route path="*" element={<NotFound />} />
        </Routes>
      </BrowserRouter>
    </Provider>
  );
};

export default App;
