let form = document.querySelector("#form");
let table = document.querySelector("#table");
let tbody = table.querySelector('tbody');
const storage = new Storage("tasks");

form.addEventListener("submit", addTask);

function addTask(){
    let task = form.querySelector("input#task").value;
    let author = form.querySelector("#author").value;
    let date = form.querySelector("#date").value;

    storage.set(`task_${Date.now()}`, {
        task:task,
        author:author,
        date:date
    });
}

function render(){
    let tasks = storage.getAll();
    Object.keys(tasks).forEach(function(index){
        let row = tbody.insertRow();
        row.insertCell().textContent = tasks[index].task;
        row.insertCell().textContent = tasks[index].author;
        row.insertCell().textContent = tasks[index].date;
        let deletebtn = document.createElement('button');
        deletebtn.addEventListener('click', function(e){
            removeTask(index);
            tbody.removeChild(e.target.parentNode.parentNode)
        })
        deletebtn.className = "btn btn-danger";
        deletebtn.textContent = 'x';
        row.insertCell().append(deletebtn);

        tbody.append(row);
    });
}
function destroy(){
    storage.destroy();
    render();
}
function removeTask(taskId){
    tbody.innerHTML = '';

    storage.delete(taskId);
}
render();



// form.addEventListener("submit", function(e){
//     e.preventDefault();
//     let task = this.querySelector("input#task").value;
//     let author = this.querySelector("#author").value;
//     let date = this.querySelector("#date").value;

//     if(!task.length || !author.length || !date.length){
//         alert("Plotso fushat iher.")
//         throw new Error("Ploteso fushat iher.");
//     }
//     let row = tbody.insertRow();
//     row.insertCell().textContent = task;
//     row.insertCell().textContent = author;
//     row.insertCell().textContent = date;
//     row.insertCell().innerHTML = `<button class="btn btn-danger" onclick="removeRow(this)">x</button>`;

//     tbody.append(row);
// });

// function removeRow(e){
//     if(confirm("Are you 100% sure?")){
//         tbody.removeChild(e.parentNode.parentNode)
//     }
// }

