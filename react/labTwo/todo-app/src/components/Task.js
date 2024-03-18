import React from 'react';

const Task = ({ task, onMarkDone, onDelete }) => {
  const handleMarkDone = () => onMarkDone(task.id);
  const handleDelete = () => onDelete(task.id);

  return (
    <li className={task.done ? 'task done' : 'task'}>
      <span className="task-text">{task.text}</span>
      <button className="mark-done" onClick={handleMarkDone}>
        {task.done ? 'Mark Undone' : 'Mark Done'}
      </button>
      <button className="delete" onClick={handleDelete}>
        Delete
      </button>
    </li>
  );
};

export default Task;
