//gets todo items from local storage
function get_todos() {
	var todos = new Array;
	var todos_str = localStorage.getItem('todo');
	if (todos_str != null) {
		todos = JSON.parse(todos_str);
	}
	return todos;
}
//add items to todo list
function add(){
	var task = document.getElementById('task').value;

	var todos = get_todos();
	todos.push(task);
	localStorage.setItem('todo', JSON.stringify(todos));

	show();

	return false;
}
//removes items from local Storage
function remove() {
	var id = this.getAttribute('id');
	var todos = get_todos();
	todos.splice(id, 1);
	localStorage.setItem('todo', JSON.stringify(todos));

	show();

	return false;
}

function show() {
	var todos = get_todos();

	var html = '<div class="row">';
	for(var i=0; i<todos.length; i++) {
		html += '<div class="row"><p>' + todos[i] + '<button class="remove" id="' + i +'">x</button><div>';
	};
	html += '</div>';

	document.getElementById('todos').innerHTML = html;

	var  buttons = document.getElementsByClassName('remove');
	for (var i=0; i < buttons.length; i++) {
		buttons[i].addEventListener('click', remove);
	};
}

document.getElementById('add').addEventListener('click', add);
show();