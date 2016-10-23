import { TaskCollection, Task } from './TaskCollection';
import { Person } from './Person';


console.log(new Person({name: 'User', age: 24}).greet());

new TaskCollection([new Task, new Task, new Task]).log();