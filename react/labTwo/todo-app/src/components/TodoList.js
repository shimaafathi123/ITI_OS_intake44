import React from 'react';
import Task from './Task';
import './TodoList.css';
const TodoList = ({ tasks, onMarkDone, onDelete }) => {
  return (
    <ul className="todo-list">
      {tasks.map((task) => (
        <Task
          key={task.id}
          task={task}
          onMarkDone={onMarkDone}
          onDelete={onDelete}
        />
      ))}
    </ul>
  );
};

export default TodoList;
