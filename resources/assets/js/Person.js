export class Person {
	constructor({name, age}) { //ES6 object shorthand and destructuring
		this.name = name;
		this.age = age;
	}

	greet() {
		return `Hello ${this.name}, your age is ${this.age}`; //ES6 template strings
	}
}