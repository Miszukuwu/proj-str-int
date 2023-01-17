function TimeUpdate(elem){
    const time = new Date()
    elem.innerHTML = time.toLocaleTimeString();
}

const timer = document.querySelector(".timer");
TimeUpdate(timer);
setInterval(function(){
    TimeUpdate(timer);

}, 1000);

const months = ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj","Czerwiec","Lipiec","Sierpień","Wrzesień", "Październik", "Listopad","Grudzień"];
const days = ["niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"];

function DateUpdate(){
    const CurrentDate = new Date();
    document.querySelector(".year").innerHTML = CurrentDate.getFullYear();
    document.querySelector(".month").innerHTML = months[CurrentDate.getMonth()];
    document.querySelector(".date").innerHTML = CurrentDate.getDate();
    document.querySelector(".day").innerHTML = days[CurrentDate.getDay()];

}

DateUpdate();