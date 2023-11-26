/**
 * @name splash-screen.js
 * @version 0.1
 * @author luca mack
 * @description looks for [data-splash-screen] element on page and shows it while the DOM laods
*/

// Warte, bis das DOM vollständig geladen ist
document.addEventListener("DOMContentLoaded", function () {
    // Verzögerung in Millisekunden (z.B. 5000 für 5 Sekunden)
    const delayInMilliseconds = 5000;

    // Zeige den Splash-Screen
    const splashScreen = document.querySelector("[data-splash-screen]");
    splashScreen.style.display = "block";

    // Setze ein Timeout, um den Splash-Screen nach einer bestimmten Zeit zu entfernen
    const timeoutId = setTimeout(function () {
        splashScreen.style.display = "none";
    }, delayInMilliseconds);

    // Überwache, ob die Seite vollständig geladen ist
    window.addEventListener("load", function () {
        // Seite wurde erfolgreich geladen, entferne den Splash-Screen und das Timeout
        clearTimeout(timeoutId);
        splashScreen.style.display = "none";
    });
});
