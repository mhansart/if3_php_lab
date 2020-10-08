// hauteur de l'écran =100%
var h = window.innerHeight;
var style = document.createElement("style");
document.head.appendChild(style);
style.sheet.insertRule("body {height: " + h + "px}");

accueil.classList.add("active");