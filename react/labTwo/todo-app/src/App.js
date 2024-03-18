import React, { useState } from "react";
import TodoList from './components/TodoList';
import ToDoForm from './components/ToDoForm';

function App() {
  const [tasks, setTasks] = useState([]);

  const addTask = (newTask) => {
    setTasks([...tasks, newTask]);
  };

  const markDone = (taskId) => {
    setTasks(
      tasks.map((task) =>
        task.id === taskId ? { ...task, done: !task.done } : task
      )
    );
  };

  const deleteTask = (taskId) => {
    setTasks(tasks.filter((task) => task.id !== taskId));
  };

  return (
    <div className="App">
      <h1>To-Do List</h1>
      <ToDoForm onAddTask={addTask} />
      <TodoList tasks={tasks} onMarkDone={markDone} onDelete={deleteTask} />
    </div>
  );
}

export default App;
