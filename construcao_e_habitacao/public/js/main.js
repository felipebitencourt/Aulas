var menu_empreendimentos = document.querySelector("#menu_empreendimentos");
var parar = document.querySelector(".parar");
var elemento = document.querySelector(".navbar-toggler-icon");
var mostrar = document.querySelector(".mostrar");

function abrirMenu(){setTimeout(teste, 1000);}
function teste(){menu_empreendimentos.click();}

parar.scrollIntoView();

function clicar(){
    elemento.style.display = "none";
    mostrar.style.display = "inline-block";
}