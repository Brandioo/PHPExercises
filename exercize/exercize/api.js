let posts = [];

fetch('localhost:8000/api/orders')
    .then(response => response.json())
    .then(data => {
        for (post in data) {
            let html = document.createElement('li');
            html.textContent = data[post].title;
            document.querySelector("#root").append(html)
        }
    });


