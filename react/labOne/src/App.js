import React from 'react';
import HeroSection from './components/HeroSection';
import AboutMe from './components/AboutMe';
import Skills from './components/Skills';
import Portfolio from './components/Portfolio';
import Footer from './components/Footer';

const App = () => {
  return (
    <div className="App">
      <HeroSection />
      <AboutMe />
      <Skills />
      <Portfolio />
      <Footer />
    </div>
  );
};

export default App;
