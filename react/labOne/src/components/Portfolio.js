import React from "react";
import { Container, Row, Col, Card, Image } from "react-bootstrap";
import "./Portfolio.css";

const Portfolio = () => {
  const projects = [
    {
      title: "Snake Game",
      description: "A Classic snake game in python",
      link: "https://github.com/shimaafathi123",
      image: "https://www.google.com/logos/fnbx/snake_arcade/cta_alt.png",
    },
    {
      title: "rock-paper-scissors",
      description: "A Classic rock paper scissors in python",
      link: "https://github.com/shimaafathi123",
      image:
        "data:image/jpeg;base64,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",
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
                <Image src={project.image} alt={project.title} />
                <Card.Body>
                  <Card.Title>{project.title}</Card.Title>
                  <Card.Text>{project.description}</Card.Text>
                  <a
                    href={project.link}
                    className="btn btn-sm btn-outline-primary"
                  >
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
