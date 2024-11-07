const monthsName = ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"];
const weekDayNames = ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"];
let currentDate = new Date(2026, 9, 24);
let month = currentDate.getMonth();
let day = currentDate.getDate();
let weekDay = currentDate.getDay();
let year = currentDate.getFullYear();
let birthdayDate = new Date(year, 9, 23);
let isBirthday = currentDate.toDateString() == birthdayDate.toDateString(); 
if (currentDate.getTime() > birthdayDate.getTime() && !isBirthday){
    birthdayDate.setFullYear(year+1);
}
let leftToBday = Math.ceil((Date.parse(birthdayDate)-Date.parse(currentDate))/1000/60/60/24);

document.getElementById("banner").innerHTML = monthsName[month] + " " +year;
document.getElementById("day").innerHTML = day;
document.getElementById("week-day").innerHTML = weekDayNames[weekDay];
document.getElementById("footer").innerHTML = "Do urodzin: "+leftToBday;