/*
------------------------------------------------------------
Function to activate form button to open the slider.
------------------------------------------------------------
*/
function open_panel() {
slideIt();
var a = document.getElementById("sidebar_form");
a.setAttribute("id", "sidebar1_form");
a.setAttribute("onclick", "close_panel()");
}
/*
------------------------------------------------------------
Function to slide the sidebar form (open form)
------------------------------------------------------------
*/
function slideIt() {
var slidingDiv = document.getElementById("slider_form");
var stopPosition = 0;
if (parseInt(slidingDiv.style.right) < stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
setTimeout(slideIt, 1);
}
}
/*
------------------------------------------------------------
Function to activate form button to close the slider.
------------------------------------------------------------
*/
function close_panel() {
slideIn();
a = document.getElementById("sidebar1_form");
a.setAttribute("id", "sidebar_form");
a.setAttribute("onclick", "open_panel()");
}
/*
------------------------------------------------------------
Function to slide the sidebar form (slide in form)
------------------------------------------------------------
*/
function slideIn() {
var slidingDiv = document.getElementById("slider_form");
var stopPosition = -320;
if (parseInt(slidingDiv.style.right) > stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
setTimeout(slideIn, 1);
}
}