const btn = document.querySelector("img");
let stan = false;

btn.addEventListener("mousedown",function(event){
    event.target.src = "clicked.png"
    stan = true;
});

btn.addEventListener("mouseenter",function(event){
    if (stan == false) {
        event.target.src = "hover.png"
    }
});

btn.addEventListener("mouseleave",function(event){
    if (stan == false) {
        event.target.src = "default.png"
    }
});

document.querySelector("h1").addEventListener("click",fuction(e){

});