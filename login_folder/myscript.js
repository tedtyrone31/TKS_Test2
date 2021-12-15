

function startTime() {
    var today = new Date();
    var h = today.getHours() > 12 ? today.getHours() - 12:today.getHours();
    var am_pm = today.getHours() >= 12 ? "P.M." : "A.M.";
    var m = today.getMinutes();
    var s = today.getSeconds();
    months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
    curMonth = months[today.getMonth()],
    dayOfMonth = today.getDate(); 
    year = today.getFullYear();

    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML =
    h + ":" + m + ":" + s + "<span class=\"period\"> " +am_pm + "</span>";
    
    document.getElementById('month').innerHTML = 
    curMonth;
    document.getElementById('day').innerHTML = 
    dayOfMonth;
    document.getElementById('year').innerHTML = 
    year;


    var t = setTimeout(startTime);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function breakstartAM(){
    var today = new Date();
    var h = today.getHours() > 12 ? today.getHours() - 12:today.getHours();
    var am_pm = today.getHours() >= 12 ? "P.M." : "A.M.";
    var m = today.getMinutes();
    var s = today.getSeconds();
    var months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
    month = months[today.getMonth()],
    day = today.getDate(); 
    year = today.getFullYear();


    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('break1').innerHTML =
    h + ":" + m + ":" + s + " " +am_pm ;
      
    document.getElementById('dateToday').innerHTML =
    month + " "+ day + ","+ " " + year;
    var breakstart1 =  h + ":" + m + ":" + s  +am_pm ;

    
}

function breakendAM(){
    var today = new Date();
    var h = today.getHours() > 12 ? today.getHours() - 12:today.getHours();
    var am_pm = today.getHours() >= 12 ? "P.M." : "A.M.";
    var m = today.getMinutes();
    var s = today.getSeconds();
    var months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
    month = months[today.getMonth()],
    day = today.getDate(); 
    year = today.getFullYear();


    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('break2').innerHTML =
    h + ":" + m + ":" + s + " " +am_pm ;
    
}     

function breakstartPM(){
    var today = new Date();
    var h = today.getHours() > 12 ? today.getHours() - 12:today.getHours();
    var am_pm = today.getHours() >= 12 ? "P.M." : "A.M.";
    var m = today.getMinutes();
    var s = today.getSeconds();
    var months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
    month = months[today.getMonth()],
    day = today.getDate(); 
    year = today.getFullYear();


    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('break3').innerHTML =
    h + ":" + m + ":" + s + " " +am_pm ;
      
    var breakstart1 =  h + ":" + m + ":" + s  +am_pm ;
}

function breakendPM(){
    var today = new Date();
    var h = today.getHours() > 12 ? today.getHours() - 12:today.getHours();
    var am_pm = today.getHours() >= 12 ? "P.M." : "A.M.";
    var m = today.getMinutes();
    var s = today.getSeconds();
    var months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
    month = months[today.getMonth()],
    day = today.getDate(); 
    year = today.getFullYear();


    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('break4').innerHTML =
    h + ":" + m + ":" + s + " " +am_pm ;
}     