//regexp mdp
var iptMdp = document.getElementById('iptMdp');
var pattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/;
iptMdp.addEventListener("input", function(){
    if (iptMdp.value !=="" && pattern.test(iptMdp.value)){
        iptMdp.style.border="2px solid #07B38B";
    }else{
        iptMdp.style.border="2px solid #E3173F";
    }
})
