import React, { useState } from "react";
import "./ToDoForm.css";
const ToDoForm = ({ onAddTask }) => {
  const [newTaskText, setNewTaskText] = useState("");

  const handleSubmit = (event) => {
    event.preventDefault();
    if (newTaskText.trim()) {
      onAddTask({ id: Date.now(), text: newTaskText, done: false });
      setNewTaskText("");
    }
  };

  const handleChange = (event) => {
    setNewTaskText(event.target.value);
  };

  return (
    <form onSubmit={handleSubmit} className="todo-form">
      <input
        type="text"
        value={newTaskText}
        onChange={handleChange}
        placeholder="Add a new task..."
        required
      />
      <button type="submit">Add</button>
    </form>
  );
};

export default ToDoForm;
