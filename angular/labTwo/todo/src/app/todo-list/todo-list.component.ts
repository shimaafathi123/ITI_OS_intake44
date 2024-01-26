import { NgClass, NgFor } from '@angular/common';
import { Component ,Input,Output,EventEmitter} from '@angular/core';

@Component({
  selector: 'app-todo-list',
  standalone: true,
  imports: [NgClass,NgFor],
  templateUrl: './todo-list.component.html',
  styleUrl: './todo-list.component.css'
})
export class TodoListComponent {
  @Input() tasks: string[] = [];
  @Output() deleteTask: EventEmitter<number> = new EventEmitter<number>();

  constructor() {}

  onDelete(index: number) {
    this.deleteTask.emit(index);
  }
  }
