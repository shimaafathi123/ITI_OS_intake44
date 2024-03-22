import React from 'react';
import { TextField, FormControl, FormHelperText } from '@mui/material';

const TextInput = ({ name, label, value, onChange, error }) => {
  return (
    <FormControl fullWidth margin="normal">
      <TextField
        label={label}
        name={name}
        value={value}
        onChange={onChange}
        error={!!error} 
        helperText={error} 
      />
      {error && <FormHelperText error>{error}</FormHelperText>} 
    </FormControl>
  );
};

export default TextInput;
