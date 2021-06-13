let form = document.querySelector("#form");
let table = document.querySelector("#table");
let tbody = table.querySelector('tbody');

form.addEventListener("submit", function (e) {
    e.preventDefault();
    let task = this.querySelector("input#task").value;
    let author = this.querySelector("#author").value;
    let date = this.querySelector("#date").value;

    if (!task.length || !author.length || !date.length) {
        alert("Fill The Fields")
        throw new Error("Complete")
    }
    let row = tbody.insertRow();
    row.insertCell().textContent = task;
    row.insertCell().textContent = author;
    row.insertCell().textContent = date;
    row.insertCell().innerHTML = `<button class="btn btn-danger" onclick="removeRow(this)">x</button>`;
    tbody.append(row);
});

function removeRow(e) {
    if (confirm("Are you 100% sure?")) {
        tbody.removeChild(e.parentNode.parentNode)
    }
}