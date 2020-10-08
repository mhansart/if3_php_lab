//créer un event
lesevents.classList.add("activecompte");
var ajoutEvent = document.getElementById('ajoutEvent');
var formEvents = document.getElementById('formEvents');
var createEvent = document.getElementById('createEvent');
ajoutEvent.addEventListener("click", function(){
    if(formEvents.style.display == "none"){
        formEvents.style.display = "flex";
        ajoutEvent.style.display = "none";
    }else{
        formEvents.style.display = "none";
    }
})
createEvent.addEventListener("click", function(){
    if(formEvents.style.display == "none"){
        formEvents.style.display = "flex";
        ajoutEvent.style.display = "none";
    }else{
        formEvents.style.display = "none";
        ajoutEvent.style.display = "block";
    }
})


