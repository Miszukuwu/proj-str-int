let menuOpened = false;
function menuButton() {
    if (menuOpened)
        closeNav();
    else
        openNav();
}
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "290px";
    menuOpened = true;
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "40px";
    menuOpened = false;
}
