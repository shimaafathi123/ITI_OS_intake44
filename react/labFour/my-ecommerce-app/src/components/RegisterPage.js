import React, { useState } from 'react';
import { Button, TextField, FormControl } from '@mui/material';
import TextInput from './TextInput'; 

const RegisterPage = () => {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');
  const [image, setImage] = useState(null); 
  const [errors, setErrors] = useState({}); 

  const handleChange = (event) => {
    const { name, value, files } = event.target;
    switch (name) {
      case 'name':
        setName(value.trim()); 
        break;
      case 'email':
        setEmail(value);
        break;
      case 'password':
        setPassword(value);
        break;
      case 'confirmPassword':
        setConfirmPassword(value);
        break;
      case 'image':
        setImage(files[0]);
        break;
      default:
        break;
    }
  };

  const handleSubmit = (event) => {
    event.preventDefault();

    const newErrors = {}; 

    if (!name) {
      newErrors.name = 'Name is required';
    } else if (/\s/.test(name)) { 
      newErrors.name = 'Name cannot contain spaces';
    }

    if (!email) {
      newErrors.email = 'Email is required';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { 
      newErrors.email = 'Invalid email format';
    }

    if (!password) {
      newErrors.password = 'Password is required';
    } else if (password.length < 8) {
      newErrors.password = 'Password must be at least 8 characters long';
    } else if (password.length > 12) {
      newErrors.password = 'Password cannot exceed 12 characters';
    }

    if (!confirmPassword) {
      newErrors.confirmPassword = 'Confirm password is required';
    } else if (confirmPassword !== password) {
      newErrors.confirmPassword = 'Passwords do not match';
    }

    if (!image) {
      newErrors.image = 'Image upload is required';
    }

    setErrors(newErrors);

    if (Object.keys(newErrors).length === 0) {
      console.log({ name, email, password, image }); 
    }
  };

  return (
    <div className="register-page">
      <h2>Register</h2>
      <form onSubmit={handleSubmit}>
        <TextInput
          name="name"
          label="Name"
          value={name}
          onChange={handleChange}
          error={errors.name}
        />
          
          <TextInput
          name="email"
          label="Email"
          value={email}
          onChange={handleChange}
          error={errors.email}
        />
        <TextInput
          name="password"
          label="Password"
          type="password" 
          value={password}
          onChange={handleChange}
          error={errors.password}
        />
        <TextInput
          name="confirmPassword"
          label="Confirm Password"
          type="password"
          value={confirmPassword}
          onChange={handleChange}
          error={errors.confirmPassword}
        />
        <FormControl fullWidth margin="normal">
          <TextField
            label="Upload Image"
            type="file"
            name="image"
            onChange={handleChange}
            error={!!errors.image} 
            helperText={errors.image}
          />
        </FormControl>
        <Button type="submit" variant="contained">
          Register
        </Button>
      </form>
    </div>
  );
};

export default RegisterPage;
