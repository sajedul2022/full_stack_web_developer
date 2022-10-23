import { Component } from "@angular/core";
import { Model, TodoItem } from "./model";
@Component({
 selector: "todo-app",
 templateUrl: "app.component.html"
})
export class AppComponent {
 model = new Model();
 getName() {
 return this.model.user;
 }
 getTodoItems() {
  // return this.model.items;
  return this.model.items.filter(item => !item.done); // Filtering To-Do Items
  }

  addItem(newItem:string) {
    if (newItem != "") {
    this.model.items.push(new TodoItem(newItem, false));
    }
    } // add button


}
