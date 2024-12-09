// Variáveis globais
var malenia = document.querySelector("#malenia");
const VELOCIDADE_BASE = 5;
var intervalo = setInterval(mover, 17);

var mover_para_direita = false;
var mover_para_esquerda = false;
var mover_para_cima = false;
var mover_para_baixo = false;

// Executar
document.addEventListener("keydown", keydown);
document.addEventListener("keyup", keyup);


// Funções
function keydown(event){

    console.log(event.key);

    if(event.key == "ArrowRight" || event.key == "d"){mover_para_direita = true;}
    else if(event.key == "ArrowLeft" || event.key == "a"){mover_para_esquerda = true;}

    if(event.key == "ArrowDown" || event.key == "s"){mover_para_baixo = true;}
    else if(event.key == "ArrowUp" || event.key == "w"){mover_para_cima = true;}
    
}

function keyup(event){

    console.log(event.key);

    if(event.key == "ArrowRight" || event.key == "d"){mover_para_direita = false;}
    else if(event.key == "ArrowLeft" || event.key == "a"){mover_para_esquerda = false;}

    if(event.key == "ArrowDown" || event.key == "s"){mover_para_baixo = false;}
    else if(event.key == "ArrowUp" || event.key == "w"){mover_para_cima = false;}
    
}

function mover(){

    if(mover_para_direita){malenia.style.left = `${malenia.offsetLeft + VELOCIDADE_BASE}px`;}
    else if(mover_para_esquerda){malenia.style.left = `${malenia.offsetLeft - VELOCIDADE_BASE}px`;}

    if(mover_para_cima){malenia.style.top = `${malenia.offsetTop - VELOCIDADE_BASE}px`;}
    else if(mover_para_baixo){malenia.style.top = `${malenia.offsetTop + VELOCIDADE_BASE}px`;}
}