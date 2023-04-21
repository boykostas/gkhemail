'use strict'
// Функция идущего времени на главной странице
function startTime() {
    var date = new Date();
    var day = date.getDate();
    var monthOfYear = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
    var month = monthOfYear[date.getMonth()];
    var year = date.getFullYear();
    var weekdays = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
    var week = weekdays[date.getDay()];
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('timer').innerHTML = day + " " + month + " " + year + " года, " + week + ", " + h + ":" + m + ":" + s;
    t = setTimeout('startTime()', 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}