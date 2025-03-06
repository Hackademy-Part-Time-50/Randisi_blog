import './bootstrap';

const article_list = document.getElementById("articles_list");

fetch("http://127.0.0.1:8000/api/articles")
    .then(response => response.json())
    .then(data=> {
        data.forEach(item => {
           article_list.innerHTML+= `<li>${item.title}</li>`;
        })
    });
    