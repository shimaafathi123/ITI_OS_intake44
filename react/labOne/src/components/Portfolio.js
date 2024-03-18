import React from 'react';
import { Container, Row, Col, Card, Image } from 'react-bootstrap';
import './Portfolio.css';

const Portfolio = () => {
  const projects = [
    {
      title: 'Snake Game',
      description: 'A Classic snake game in python',
      link: 'https://github.com/shimaafathi123', 
    },
  ];

  return (
    <section className="portfolio">
      <Container>
        <h2>Portfolio</h2>
        <Row>
          {projects.map((project) => (
            <Col key={project.title} md={4}>
              <Card>
                <Image src="https://www.google.com/logos/fnbx/snake_arcade/cta_alt.png" alt={project.title} />
                <Card.Body>
                  <Card.Title>{project.title}</Card.Title>
                  <Card.Text>{project.description}</Card.Text>
                  <a href={project.link} className="btn btn-sm btn-outline-primary">
                    View Project
                  </a>
                </Card.Body>
              </Card>
            </Col>
          ))}
        </Row>
      </Container>
    </section>
  );
};

export default Portfolio;
