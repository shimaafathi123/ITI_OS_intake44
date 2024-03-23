import React from 'react';
import { useSelector } from 'react-redux';
import { useNavigate } from 'react-router-dom';

const SubmittedValuesPage = () => {
  const userData = useSelector((state) => state.user);
  const { name, email, password, confirmPassword, image, submitted } = userData;
  const navigate = useNavigate();

  return (
    <div>
      {submitted ? (
        <div>
          <h2>Submitted Values</h2>
          <p>Name: {name}</p>
          <p>Email: {email}</p>
          <p>Password: {password} (not shown in real applications)</p>  
          <p>Confirm Password: {confirmPassword} (not shown in real applications)</p>
          {image && <p>Image: {image.name} (assuming image has a name property)</p>}  
          <button onClick={() => navigate('/register')}>Register Again</button>  
        </div>
      ) : (
        <div>
          <h2>No data submitted yet</h2>
          <button onClick={() => navigate('/register')}>Go to Registration</button>  
        </div>
      )}
    </div>
  );
};

export default SubmittedValuesPage;
