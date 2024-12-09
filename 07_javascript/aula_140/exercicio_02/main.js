var saida = document.querySelector("#saida");
var body = document.body;

var modal = false;

saida.style.display = "none";

function teste(){
    if(!modal){
        body.classList.toggle("active");
        saida.style.display = "flex";
    }
    else{
        body.classList.toggle("active");
        saida.style.display = "none";
    }
    
    modal = !modal;
}
