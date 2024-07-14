
"use strict";

// Formular-Validierung

const formular = document.getElementById("kontaktformular");
const vorname = document.getElementById("vorname");
const email = document.getElementById("email");
const nachricht = document.getElementById("nachricht");
const errorElement = document.getElementById("error");

formular.addEventListener("submit", validateForm);
formular.addEventListener("reset", clearErrorMessage);

function validateForm(event) {
    let required = []
    let hints = []
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (document.documentElement.lang == 'de') {
        if (vorname.value == '') {
            required.push("➤ Vorname")
            vorname.focus();
        }

        if (email.value == '') {
            required.push("➤ E-Mail")
            email.focus();
        }
        else if (!email.value.match(mailformat)) {
            hints.push("❗ Bitte tragen Sie eine gueltige E-Mail-Adresse ein.")
            email.focus();
        }

        if (nachricht.value == '') {
            required.push("➤ Nachricht")
            nachricht.focus();
        }
        else if (nachricht.value.length < 10) {
            hints.push("❗ Ihre Nachricht sollte mindestens 10 Zeichen umfassen.\n(Sie verwenden aktuell " + nachricht.value.length + " Zeichen.)")
            nachricht.focus();
        }

        if (required.length > 0) {
            event.preventDefault();
            errorElement.innerText = "❗ Bitte fuellen Sie folgende Pflichtfelder(*) aus:\n" + required.join(' ') + "\n" + hints.join('\n');
            errorElement.style.display = "block";
        }
        else if (hints.length > 0) {
            event.preventDefault();
            errorElement.innerText = hints.join('\n');
            errorElement.style.display = "block";
        }
    }
    else {
        if (vorname.value == '') {
            required.push("➤ first name")
            vorname.focus();
        }

        if (email.value == '') {
            required.push("➤ e-mail")
            email.focus();
        }
        else if (!email.value.match(mailformat)) {
            hints.push("❗ Please provide a valid email address.")
            email.focus();
        }

        if (nachricht.value == '') {
            required.push("➤ message")
            nachricht.focus();
        }
        else if (nachricht.value.length < 10) {
            hints.push("❗ Your message should consist of a least 10 characters.\n(You are currently using " + nachricht.value.length + " characters.)")
            nachricht.focus();
        }

        if (required.length > 0) {
            event.preventDefault();
            errorElement.innerText = "❗ Please fill in the required input fields (*):\n" + required.join(' ') + "\n" + hints.join('\n');
            errorElement.style.display = "block";
        }
        else if (hints.length > 0) {
            event.preventDefault();
            errorElement.innerText = hints.join('\n');
            errorElement.style.display = "block";
        }
    }
}

function clearErrorMessage() {
    errorElement.style.display = "none";
}