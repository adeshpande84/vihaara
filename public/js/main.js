(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Person = exports.Person = function () {
	function Person(_ref) {
		var name = _ref.name;
		var age = _ref.age;

		_classCallCheck(this, Person);

		//ES6 object shorthand and destructuring
		this.name = name;
		this.age = age;
	}

	_createClass(Person, [{
		key: "greet",
		value: function greet() {
			return "Hello " + this.name + ", your age is " + this.age; //ES6 template strings
		}
	}]);

	return Person;
}();

},{}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
	value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var TaskCollection = exports.TaskCollection = function () {
	function TaskCollection() {
		var tasks = arguments.length <= 0 || arguments[0] === undefined ? [] : arguments[0];

		_classCallCheck(this, TaskCollection);

		this.tasks = tasks;
	}

	_createClass(TaskCollection, [{
		key: "log",
		value: function log() {
			this.tasks.forEach(function (task) {
				//console.log(this);
				console.log(task);
			});
		}
	}]);

	return TaskCollection;
}();

var Task = exports.Task = function Task() {
	var name = arguments.length <= 0 || arguments[0] === undefined ? "Default task" : arguments[0];

	_classCallCheck(this, Task);

	this.name = name;
};

},{}],3:[function(require,module,exports){
'use strict';

var _TaskCollection = require('./TaskCollection');

var _Person = require('./Person');

console.log(new _Person.Person({ name: 'User', age: 24 }).greet());

new _TaskCollection.TaskCollection([new _TaskCollection.Task(), new _TaskCollection.Task(), new _TaskCollection.Task()]).log();

},{"./Person":1,"./TaskCollection":2}]},{},[3]);

//# sourceMappingURL=main.js.map
