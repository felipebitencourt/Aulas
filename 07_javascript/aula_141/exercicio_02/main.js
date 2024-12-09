var saida = document.querySelector("#saida");
var intervalo = setInterval(atualizar, 500);

function atualizar(){
    let data_atual = new Date();
    let horas = (data_atual.getHours() < 10) ? `0${data_atual.getHours()}` : data_atual.getHours();
    let minutos = (data_atual.getMinutes() < 10) ? `0${data_atual.getMinutes()}` : data_atual.getMinutes();
    let segundos = (data_atual.getSeconds() < 10) ? `0${data_atual.getSeconds()}` : data_atual.getSeconds();
    saida.innerHTML = `${horas}:${minutos}:${segundos}`;

}

// JS 2

var horas = document.querySelector("#horas");
var minutos = document.querySelector("#minutos");
var segundos = document.querySelector("#segundos");
var milisegundos = document.querySelector("#milisegundos");
var intervalo_2 = setInterval(atualizar_2, 10);

atualizar_2();

function atualizar_2(){
    let data_atual = new Date();
    let valor_horas = data_atual.getHours() / 23 * 100;
    let valor_minutos = data_atual.getMinutes() / 59 * 100;
    let valor_segundos = data_atual.getSeconds() / 59 * 100;
    let valor_mili = data_atual.getMilliseconds() / 999 * 100;


    horas.style.width = `${valor_horas}%`;
    minutos.style.width = `${valor_minutos}%`;
    segundos.style.width = `${valor_segundos}%`;
    milisegundos.style.width = `${valor_mili}%`;
}

// JS 3

var ponteiro_horas = document.querySelector("#ponteiro_horas");
var ponteiro_minutos = document.querySelector("#ponteiro_minutos");
var ponteiro_segundos = document.querySelector("#ponteiro_segundos");
var intervalo_3 = setInterval(atualizar_3, 10);

function atualizar_3(){
    let data_atual = new Date();
    let valor_horas = -90 + (data_atual.getHours() * (360/12));
    let valor_minutos = -90 + (data_atual.getMinutes() * 6);
    let valor_segundos = -90 + (data_atual.getSeconds() * 6);

    ponteiro_horas.style.transform = `translateX(50px) rotate(${valor_horas}deg)`;
    ponteiro_minutos.style.transform = `translateX(65px) rotate(${valor_minutos}deg)`;
    ponteiro_segundos.style.transform = `translateX(65px) rotate(${valor_segundos}deg)`;
}