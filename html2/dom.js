let taskHeader = document.getElementById('task-header');
console.log(taskHeader.id);

// taskHeader.textContent="Hello World";

console.log(taskHeader.children[0].textContent)
console.log(taskHeader.children[0].innerText)

// taskHeader.children[0].textContent="Hello World";
// taskHeader.children[0].innerText="This is a test";


taskHeader.style.background = "purple";
taskHeader.style.color = "white";
taskHeader.style.border = "1px solid blue";
// taskHeader.style.marginTop = "10px";

let listItems = document.getElementsByClassName('list-group');

// let listgroup=$('.list-group');
// console.log(listItems);


let listgroup = document.querySelector(".list-group"); //.->class   #->Id
console.log(listgroup);


let addTaskBtn = document.querySelector("#addTask");

document.addEventListener("click", Clicked);
// document.addEventListener("mouseover", hover);

// function hover() {
//     console.log("On Top")
// }

function Clicked() {
    console.log("Clicked Ropt")
}


//merr vleren ne console
let form = document.querySelector("#form");
form.addEventListener("submit", addTask);


let deleteElements = document.querySelector('.delete');
// form.addEventListener("submit",addTask)

// deleteElements.addEventListener('click', console.log('Clicked Delete'))


function addTask(e) {
    e.preventDefault();
    // console.log(e);
    let input = document.querySelector("#inputTask");
    // console.log(input.value)
    let inputValue = input.value;
    // listgroup.append(inputValue)
    // console.log(listgroup);

    if (inputValue.length) {

        //Create li element
        let li = document.createElement('li');
        //Create button element
        let deleteBtn = document.createElement('button');
        deleteBtn.addEventListener('click', remove);
        //Add Class to li element
        li.className = "list-group-item d-flex justify-content-between";
        //Add Class to button element
        deleteBtn.className = "btn btn-danger"
        //Add text to button element
        deleteBtn.append('x')
        li.append(inputValue);
        li.append(deleteBtn)
        listgroup.append(li)
        input.value = "";
        // console.log(li)
    }
}

let deleteBtnAll = document.querySelector("#DeleteTask")

deleteBtnAll.addEventListener('click', removeAll);
let input = document.querySelector("#inputTask");
// console.log(input.value)
let inputValue = input.value;
// liAll.append(inputValue);
// liAll.append(deleteBtn)
// listgroup.append(liAll)

function removeAll(e) {
    console.log(e.target.parentNode)
    console.log('Delete Clicked')
    if (confirm("Are you sure you want to delete All")) {
        listgroup.innerHTML = '';
    }
}


function remove(e) {
    console.log(e.target.parentNode)
    console.log('Delete Clicked')
    if (confirm("Are you sure you want to delete")) {
        listgroup.removeChild(e.target.parentNode);
    }
}
