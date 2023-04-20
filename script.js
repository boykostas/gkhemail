'use strict'
// Функция идущего времени на главной странице
function startTime() {
    var tm = new Date();
    var day = tm.getDate();
    var month = tm.getMonth() + 1;
    if (month < 10) month = '0' + month;
    var year = tm.getFullYear();
    var week = tm.getDay();
    var h = tm.getHours();
    var m = tm.getMinutes();
    var s = tm.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('timer').innerHTML = day + "." + month + "." + year + ", " + week + ", " + h + ":" + m + ":" + s;
    t = setTimeout('startTime()', 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

// https://itchief.ru/javascript/date

// var month = new Array(12);
// month[0] = "Января";
// month[1] = "Февраля";
// month[2] = "Марта";
// month[3] = "Апреля";
// month[4] = "Мая";
// month[5] = "Июня";
// month[6] = "Июля";
// month[7] = "Августа";
// month[8] = "Сентября";
// month[9] = "Октября";
// month[11] = "Декабря";

// var weekday = new Array(7);
// weekday[0] = "Воскресенье";
// weekday[1] = "Понедельник";
// weekday[2] = "Вторник";
// weekday[3] = "Среда";
// weekday[4] = "Четверг";
// weekday[5] = "Пятница";
// weekday[6] = "Суббота";