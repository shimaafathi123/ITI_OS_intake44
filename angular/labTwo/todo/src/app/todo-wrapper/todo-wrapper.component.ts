import { Component } from '@angular/core';
import { TodoFormComponent } from '../todo-form/todo-form.component';
import { TodoListComponent } from '../todo-list/todo-list.component';

@Component({
  selector: 'app-todo-wrapper',
  standalone: true,
  imports: [TodoFormComponent,TodoListComponent],
  templateUrl: './todo-wrapper.component.html',
  styleUrl: './todo-wrapper.component.css'
})
export class TodoWrapperComponent {
  tasks: string[] = [];

  constructor() {}

  onAddTask(task: string) {
    this.tasks.push(task);
  }

  onDeleteTask(index: number) {
    this.tasks.splice(index, 1);
  }
}
