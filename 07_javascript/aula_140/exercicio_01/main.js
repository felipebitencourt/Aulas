var saida = document.querySelector("#saida");
var input_total = document.querySelector("input[name='total']");
var input_tempo = document.querySelector("input[name='tempo']");

var intervalo;
var partida = 1;

function acao(){

    let total = parseInt(input_total.value); 
    
    saida.innerHTML += (partida ++) + "<br>";
    if(partida > total+1){
        alert("Fim!");
        partida = 1;
    }
}

function acionar(){
    
    let total = parseInt(input_total.value);
    let tempo = parseFloat(input_tempo.value);
    let tempo_ms = tempo * 1000;
    
    intervalo = setInterval(acao, tempo_ms);

    if(partida > total+1){limpar();}
}

function limpar(){
    clearInterval(intervalo);
    partida = 1;
    saida.innerHTML = "";
    input_total.value = "";
    input_tempo.value = "";
    input_total.focus();
}