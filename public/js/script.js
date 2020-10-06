// hauteur de l'écran =100%
var h = window.innerHeight;
var style = document.createElement("style");
document.head.appendChild(style);
style.sheet.insertRule("body {height: " + h + "px}");

// Liste de joueurs
var nomsPrenoms = document.getElementsByClassName("nomPrenom");
var noms =[]
var joueurProprietes = document.getElementsByClassName("joueurProprietes");
for (var nomPrenom of nomsPrenoms){
    noms.push(nomPrenom.innerHTML);
    nomPrenom.addEventListener("click", function(e){
        var val = e.target.innerHTML;
        var nIndex = noms.indexOf(val);
        if(joueurProprietes[nIndex].style.display=="block"){
            joueurProprietes[nIndex].style.display="none";  
        }else{
            joueurProprietes[nIndex].style.display="block";
        }
    }); 
}

// actions dans compteCoach
var listeJoueurs = document.getElementById("listeJoueurs");
var joueursTitle = document.getElementById("joueursTitle");
joueursTitle.addEventListener("click", function(){
    if(joueursTitle.innerHTML =="Voir les joueurs"){
        listeJoueurs.style.display="block";
        joueursTitle.innerHTML="Tous les joueurs";
    }else{
        listeJoueurs.style.display="none";
        joueursTitle.innerHTML="Voir les joueurs";
    }
})