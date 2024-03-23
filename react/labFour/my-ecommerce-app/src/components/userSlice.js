import { createSlice } from '@reduxjs/toolkit';

const initialState = {
  name: '',
  email: '',
  password: '',
  confirmPassword: '',
  image: null, 
  errors: {},
  submitted: false, 
};

const userSlice = createSlice({
  name: 'user',
  initialState,
  reducers: {
    updateFormValue(state, action) {
      const { name, value } = action.payload;
      state[name] = value;
    },
    setFormErrors(state, action) {
      state.errors = action.payload;
    },
    submitForm(state) {
      console.log('Form submitted with data:', state);
      state.submitted = true;
      state.errors = {}; 
    },
    resetForm(state) {
      state = initialState;
    },
  },
});

export const { updateFormValue, setFormErrors, submitForm, resetForm } = userSlice.actions;
export default userSlice.reducer;
