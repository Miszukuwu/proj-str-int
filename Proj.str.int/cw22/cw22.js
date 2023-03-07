const books = [
    "ABC programowania w JS",
    "Rybki akwariowe",
    "Góry polskie - przewodnik",
    "Encyklopedia głupoty"
]
const edit = "<img src='media/edit.png' id='edit'>";
const del = "<img src='media/delete.png' id='del'>";
function generBooks(books)
    {
        let html = "<ul>";
        for(let b of books){
            html += `<li><span class="text">${b}</span> <span class="buttons">${edit} ${del}</span></li>`;
        }
        return html+"</ul>";
    }
document.querySelector("#addNew").onclick = function()
    {
        books.push(document.querySelector("#newTitle").value);
        document.querySelector("#list").innerHTML = generBooks(books);
    }

document.querySelector("#list").innerHTML = generBooks(books);