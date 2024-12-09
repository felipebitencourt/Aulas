var barra = document.querySelector("#barra");
var intervalo = setInterval(gerar, 1000);
var loop = 1;

function gerar(){

    let r = numAleatorio_2(0, 255);
    let g = numAleatorio_2(0, 255);
    let b = numAleatorio_2(0, 255);

    barra.innerHTML +=`<h1 class='teste' style='background-color: rgb(${r}, ${g}, ${b})'>` + (loop++) + `</h1>`;
    if(loop > 10){
        clearInterval(intervalo);
    }
    console.log(`rgb(${r}, ${g}, ${b})`);
}

function numAleatorio_2(min, max){return parseInt(Math.random() * (max - min + 1) + min);}

// function gerarNum(){numAleatorio_2(0, 255)};
// function numAleatorio(max){return parseInt(Math.random() * (max + 1));}
// function numAleatorio_2(min, max){return parseInt(Math.random() * (max - min + 1) + min);}
