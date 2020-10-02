var h = window.innerHeight;
var style = document.createElement("style");
document.head.appendChild(style);
style.sheet.insertRule("body {height: " + h + "px}");

var formConnexion=document.getElementById("formConnexion");
var formInscription=document.getElementById("formInscription");
var inscrisToi=document.getElementById("inscrisToi");
var connecteToi=document.getElementById("connecteToi");
inscrisToi.addEventListener("click", function(){
    formConnexion.style.display="none";
    formInscription.style.display="flex";
})
connecteToi.addEventListener("click", function(){
    formConnexion.style.display="flex";
    formInscription.style.display="none";
})

