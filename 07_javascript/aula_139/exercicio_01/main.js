var saida = document.querySelector("#saida");
var intervalo = setInterval(teste, 1000);
var loop = 1;

// function acionar(){
//     setTimeout(teste, 2000); //apenas o nome da função
//     setTimeout(teste, 4000);
//     setTimeout(teste, 6000);
// }


function teste(){
    saida.innerHTML += (loop ++) + "<br>";
    if(loop > 5){
        limpar();
        setTimeout(atualizar, 1000);
    }
}

function limpar(){clearInterval(intervalo);}

function atualizar(){
    loop = 1;
    saida.innerHTML = "";
    // intervalo = setInterval(teste, 1000);
    alert("Fim!");
}