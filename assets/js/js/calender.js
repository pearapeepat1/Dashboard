
document.addEventListener("DOMContentLoaded", function() {
    setInterval(() => {
    var date = new Date();
    var current_time = date.getHours()+":"+date.getMinutes()+":"+ date.getSeconds();
    document.getElementById("ralTime").innerHTML = current_time;
}, 1000);});