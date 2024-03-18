import React from 'react';
import { Container, Row, Col, ListGroup } from 'react-bootstrap';
import './AboutMe.css'; 

const AboutMe = () => {
  return (
    <section className="about">
      <Container>
        <h2>About Me</h2>
        <Row>
          <Col md={6}>
            <p>
              Shimaa Fathi<br/><br/>
              Computer Science and Artificial Intelligence Graduate | Web Developer<br/><br/>
              <strong>Academic Qualifications:</strong><br/>
              I hold a Bachelor's degree in Computer Science and Artificial Intelligence from Benha University (2023).<br/><br/>
              <strong>Technical Skills:</strong><br/>
              With a strong foundation in web development, I have expertise in designing and developing websites using HTML, CSS, and JavaScript. Additionally, I am proficient in front-end design and programming techniques, including Bootstrap. Furthermore, I possess knowledge of back-end programming languages such as Python. My passion for machine learning has led me to complete various courses and projects focused on this field, specializing in model training and predictive analytics.<br/><br/>
              <strong>Work Experience:</strong><br/>
              Since 2021, I have been working as a freelancer, taking on diverse projects and delivering high-quality results.<br/><br/>
              <strong>Graduation Project:</strong><br/>
              During my academic journey, I successfully executed a project that involved using hand gestures to teach children how to correctly write Arabic letters and numbers. I presented this innovative project, providing technical explanations to both faculty members and students.<br/><br/>
              <strong>Certifications:</strong><br/>
              In October 2022, I completed the UI/UX (frontend) developer track "ITI Tech-Leaps (online)," enhancing my skills and knowledge in creating user-centric web experiences.<br/><br/>
              <strong>Languages:</strong><br/>
              I am a native speaker of Arabic and possess proficiency in reading, writing, and speaking English.<br/><br/>
              <strong>Additional Details:</strong><br/>
              As an independent and adaptable worker, I have thrived in freelance work environments, showcasing my ability to deliver results efficiently. I am an effective communicator, skilled at understanding client needs and fostering positive interactions. With strong time management and project organization abilities, I consistently achieve specific goals in a timely manner.<br/><br/>
              <strong>Contact:</strong> Please feel free to reach out to me at shimaafathi126@email.com for any inquiries or collaboration opportunities.
            </p>
            <a href="/myresume.pdf" download className="btn btn-secondary">
              Download Resume
            </a>
          </Col>
          <Col md={6}>
            <h3>Education</h3>
            <ListGroup>
              <ListGroup.Item>
                <strong>Bachelor of Science in Computer Science</strong>
                <br />
                Benha University, 2023
              </ListGroup.Item>
            </ListGroup>
          </Col>
        </Row>
      </Container>
    </section>
  );
};

export default AboutMe;
