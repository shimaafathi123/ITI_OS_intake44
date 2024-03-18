import React from 'react';
import { Container, Row, Col, Badge } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHtml5, faCss3, faJsSquare, faReact } from '@fortawesome/free-brands-svg-icons';
import './Skills.css';

const Skills = () => {
  const skills = [
    { name: 'HTML5', icon: faHtml5 },
    { name: 'CSS3', icon: faCss3 },
    { name: 'JavaScript', icon: faJsSquare },
    { name: 'React', icon: faReact },
  ];

  return (
    <section className="skills">
      <Container>
        <h2>Skills</h2>
        <Row>
          {skills.map((skill) => (
            <Col key={skill.name} md={4}>
              <FontAwesomeIcon icon={skill.icon} size="2x" className="text-primary" />
              <p>{skill.name}</p>
            </Col>
          ))}
        </Row>
      </Container>
    </section>
  );
};

export default Skills;