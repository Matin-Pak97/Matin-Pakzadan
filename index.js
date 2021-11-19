"use strict"

const changeModeButton = document.getElementById("mode-button");
var darkModeBool = false;

function darkModeHandler (){
    document.getElementsByTagName("html")[0].classList.toggle("dark-mode");
    darkModeBool = !darkModeBool;
    if(darkModeBool) {
        changeModeButton.innerHTML = ("Light Mode");
    } else {
        changeModeButton.innerHTML = ("Dark Mode");
    }
}

changeModeButton.addEventListener("click", darkModeHandler);