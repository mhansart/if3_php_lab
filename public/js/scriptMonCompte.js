//modifier les infos

var updateInfos = document.getElementById('updateInfos');
var formUpdate = document.getElementById('formUpdate');
var updateTitle = document.getElementById('updateTitle');
updateInfos.addEventListener("click", function(){
    if(formUpdate.style.display == "none"){
        formUpdate.style.display = "flex";
        updateInfos.style.display = "none";
    }else{
        formUpdate.style.display = "none";
    }
})
updateTitle.addEventListener("click", function(){
    if(formUpdate.style.display == "none"){
        formUpdate.style.display = "flex";
        updateInfos.style.display = "none";
    }else{
        formUpdate.style.display = "none";
        updateInfos.style.display = "block";
    }
})

moncompte.classList.add("activecompte")