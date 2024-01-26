import { NgClass } from '@angular/common';
import { Component, Input,Output,EventEmitter } from '@angular/core';
import { UserListComponent } from '../user-list/user-list.component';

@Component({
  selector: 'app-user-card',
  standalone: true,
  imports: [NgClass],
  templateUrl: './user-card.component.html',
  styleUrl: './user-card.component.css'
})
export class UserCardComponent {
  @Input() user: any; // Define input property 'user'
  @Output() sendToParent = new EventEmitter<string>()

  deleteGame(id : string){
    console.log("IN CHILD" , id)
    this.sendToParent.emit(id)
  }
}
