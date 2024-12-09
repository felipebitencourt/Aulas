var imagem = document.getElementById("imagem");
var button = document.getElementById("button");
var button_2 = document.getElementById("button_2");
var body = document.body;

button_2.style.display = "none";

function ligar(){
    imagem.src = "imagens/ligado.jpg";
    body.style.backgroundColor = "rgb(255, 255, 200";
    button.style.display = "none";
    button_2.style.display = "inline-block";
}

function desligar(){
    imagem.src = "imagens/desligado.jpg";
    body.style.backgroundColor = "rgba(175, 175, 175)";
    button.style.display = "inline-block";
    button_2.style.display = "none";
}