'use strict'
// Функция идущего времени на главной странице
function startTime() {
    var tm = new Date();
    var day = tm.getDate();
    var month = tm.getMonth();
    var year = tm.getFullYear();
    var week = tm.getDay();
    var h = tm.getHours();
    var m = tm.getMinutes();
    var s = tm.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('timer').innerHTML = day + "." + month + "." + year + " " + week + " " + h + ":" + m + ":" + s;
    t = setTimeout('startTime()', 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

// https://itchief.ru/javascript/date