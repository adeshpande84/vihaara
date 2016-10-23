export class TaskCollection {
	constructor(tasks = []) {
		this.tasks = tasks;
	}

	log() {
		this.tasks.forEach((task) => {
			//console.log(this);
			console.log(task);
		})
	}
}

export class Task {
	constructor(name="Default task") {
		this.name = name;
	}
}