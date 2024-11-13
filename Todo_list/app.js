let todos = [];

function addTodo() {
    const input = document.getElementById('todo-input');
    const task = input.value.trim();
    if (task) {
        todos.push({ task, completed: false });
        input.value = '';
        renderTodos();
    }
}

function editTodo(index) {
    const newTask = prompt('Edit Task:', todos[index].task);
    if (newTask !== null) {
        todos[index].task = newTask.trim();
        renderTodos();
    }
}

function deleteTodo(index) {
    todos.splice(index, 1);
    renderTodos();
}

function toggleComplete(index) {
    todos[index].completed = !todos[index].completed;
    renderTodos();
}

function renderTodos() {
    const todoList = document.getElementById('todo-list');
    todoList.innerHTML = '';

    todos.forEach((todo, index) => {
        const li = document.createElement('li');
        li.className = todo.completed ? 'completed' : '';

        const text = document.createTextNode(todo.task);
        li.appendChild(text);

        const buttonsDiv = document.createElement('div');
        buttonsDiv.className = 'buttons';

        const editButton = document.createElement('button');
        editButton.textContent = 'Edit';
        editButton.onclick = () => editTodo(index);
        buttonsDiv.appendChild(editButton);

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.className = 'delete';
        deleteButton.onclick = () => deleteTodo(index);
        buttonsDiv.appendChild(deleteButton);

        const completeButton = document.createElement('button');
        completeButton.textContent = todo.completed ? 'Undo' : 'Complete';
        completeButton.onclick = () => toggleComplete(index);
        buttonsDiv.appendChild(completeButton);

        li.appendChild(buttonsDiv);
        todoList.appendChild(li);
    });
}

// Initial render
renderTodos();
