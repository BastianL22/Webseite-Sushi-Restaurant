
"use strict";

// Scroll-To-Top-Funktion

const back2topButton = document.getElementById("back2top");

window.addEventListener("scroll", scrollFunction)
back2topButton.addEventListener("click", backToTopFunction);

function scrollFunction() {
    if (window.pageYOffset > 220) {
        back2topButton.style.display = "block";
    }
    else {
        back2topButton.style.display = "none";
    }
}

function backToTopFunction() {
    window.scrollTo(0, 0);
}


