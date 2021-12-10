"use strict"

// const changeModeButton = document.getElementById("mode-button");
// var darkModeBool = false;
//
// function darkModeHandler (){
//     document.getElementsByTagName("html")[0].classList.toggle("dark-mode");
//     darkModeBool = !darkModeBool;
//     if(darkModeBool) {
//         changeModeButton.innerHTML = ("Light Mode");
//     } else {
//         changeModeButton.innerHTML = ("Dark Mode");
//     }
// }
// changeModeButton.addEventListener("click", darkModeHandler);

const changeModeButton = $("#mode-button");
let darkModeBool = false;

function darkModeHandler () {
    $("html").toggleClass("dark-mode");
    darkModeBool = !darkModeBool;
    if(darkModeBool) {
        changeModeButton.html("Light Mode");
    } else {
        changeModeButton.html("Dark Mode");
    }
}
changeModeButton.click(darkModeHandler);