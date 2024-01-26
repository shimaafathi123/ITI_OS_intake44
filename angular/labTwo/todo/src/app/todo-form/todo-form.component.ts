import { Component, Output ,EventEmitter} from '@angular/core';
import { NgModel } from '@angular/forms';

@Component({
  selector: 'app-todo-form',
  standalone: true,
  imports: [],
  templateUrl: './todo-form.component.html',
  styleUrl: './todo-form.component.css'
})
export class TodoFormComponent {
  task: string = '';

  @Output() addTask: EventEmitter<string> = new EventEmitter<string>();

  constructor() {}

  onSubmit(taskInput: HTMLInputElement, event: Event) {
    event.preventDefault(); // Prevent the default form submission behavior
    const taskValue = taskInput.value.trim();
    if (taskValue !== '') {
      this.addTask.emit(taskValue);
      taskInput.value = ''; // Clear the input field after emitting
    }
  }
}

