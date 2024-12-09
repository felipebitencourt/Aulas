// frutas.push("laranja"); adicionar elementos na última posição.
// frutas.pop(); remover elementos na última posição.
// frutas[2] = "limão"; substituir elementos.
// frutas.splice(2, 1); apagar elementos, após a vírgula, quantidade de elementos que deseja apagar.
// frutas.splice(2, 0, "tangerina"); adicionar elementos em posição específica.
// var frutas = ["morango", "uva", "maçã"];

var bg = false;
var todos_p = document.querySelectorAll("p");

function mudar(){
    for(let i=0; i < todos_p.length; i++){
        if(!bg){todos_p[i].style.backgroundColor = "red";}
        else{todos_p[i].style.backgroundColor = "unset";}
    }
    bg = !bg;
}

// function mudar(){
//     for(let i=0; i < todos_p.length; i++){
//         todos_p[i].classList.toggle("especial"); "especial" é o nome da classe
//     }
// }