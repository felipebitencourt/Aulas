// Variáveis globais
var elemento = document.querySelector("#elemento");
var intervalo = setInterval(mover, 17);
var velocidade_x = 3.5;
var velocidade_y = 3.5;

// offsetLeft é como se fosse o "X" | offsetTop é como se fosse o "Y" 

function mover(){

    elemento.style.left = `${elemento.offsetLeft + velocidade_x}px`;
    if(elemento.offsetLeft > window.innerWidth - elemento.offsetWidth){velocidade_x = - 3.5;}
    else if(elemento.offsetLeft < 0){velocidade_x = 3.5;}
    


    elemento.style.top = `${elemento.offsetTop + velocidade_y}px`;
    if(elemento.offsetTop > window.innerHeight - elemento.offsetHeight){velocidade_y = - 3.5;}
    else if(elemento.offsetTop < 0){velocidade_y = 3.5;}
}


// if(elemento.offsetLeft < window.innerWidth - elemento.offsetWidth){
//     elemento.style.left = `${elemento.offsetLeft + velocidade}px`;
// }
// if(elemento.offsetTop < window.innerHeight - elemento.offsetHeight){
//     elemento.style.top = `${elemento.offsetLeft + velocidade}px`;
// }