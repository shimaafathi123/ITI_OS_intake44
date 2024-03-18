import React from 'react';
import { Container, Col, Row } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faTwitter, faLinkedin, faGithub } from '@fortawesome/free-brands-svg-icons';
import './Footer.css';
const Footer = () => {
  return (
    <footer className="footer">
      <Container>
        <Row>
          <Col className="text-center py-3">
            &copy; {new Date().getFullYear()} Shimaa Fathi
            <br />

            <a href="https://twitter.com/shimaa1266" target="_blank" rel="noreferrer">
              <FontAwesomeIcon icon={faTwitter} size="lg" className="mx-3" />
            </a>
            <a href="https://www.linkedin.com/in/shimaafathielsayed/" target="_blank" rel="noreferrer">
              <FontAwesomeIcon icon={faLinkedin} size="lg" />
            </a>
            <a href="https://github.com/shimaafathi123" target="_blank" rel="noreferrer">
              <FontAwesomeIcon icon={faGithub} size="lg" className="mx-3" />
            </a>
          </Col>
        </Row>
      </Container>
    </footer>
  );
};

export default Footer;
