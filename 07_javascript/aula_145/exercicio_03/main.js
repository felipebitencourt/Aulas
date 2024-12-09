// Variáveis globais
var elemento = document.querySelector("#elemento");

function mover(){

    let x = numAleatorio(0, window.innerWidth - elemento.offsetWidth);
    let y = numAleatorio(0, window.innerHeight - elemento.offsetHeight);

    elemento.style.left = `${x}px`;

    elemento.style.top = `${y}px`;
}

function numAleatorio(min, max){return parseInt(Math.random() * (max - min + 1) + min);}