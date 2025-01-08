const monthsName = ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"];
const weekDayNames = ["Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"];
function updateClock(){
    let currentDate = new Date();
    let month = currentDate.getMonth();
    let day = currentDate.getDate();
    let weekDay = currentDate.getDay();
    let year = currentDate.getFullYear();
    let hour = currentDate.getHours();
    let minutes = currentDate.getMinutes();
    let seconds = currentDate.getSeconds();
    let clock = document.getElementById('clock');
    clock.innerHTML = weekDayNames[weekDay]+" ";
    clock.innerHTML += day+" ";
    clock.innerHTML += monthsName[month]+" ";
    clock.innerHTML += year+" ";
    clock.innerHTML += hour+":"+minutes+":"+seconds;
    setTimeout(updateClock, 1000);
}
updateClock()