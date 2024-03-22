import React from 'react';
import { Container, Row, Col } from 'react-bootstrap';
import './HeroSection.css';
const HeroSection = () => {
  return (
    <section className="hero">
      <Container>
        <Row>
          <Col md={6}>
            <h1>Shimaa Fathi</h1>
            <p>A passionate and skilled web developer</p>
            <a href="/" className="btn btn-primary">
              Learn More
            </a>
          </Col>

        </Row>
      </Container>
    </section>
  );
};

export default HeroSection;