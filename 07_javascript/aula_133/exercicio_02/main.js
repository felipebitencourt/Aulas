// var saida = document.querySelector("#saida");
// var nome = document.querySelector("#nome");


// function enviar(){
//     if(nome.value.lengh > 0){saida.innerHTML = "Boa noite " + nome.value;}
//     else{alert("Preencha o nome.")}
// }

var quantidade = document.querySelector("#quantidade");
var saida = document.querySelector("#saida");

function gerarLista(event){

    event.preventDefault();

    let valor = parseInt(quantidade.value);

    limpar();
    for(let i = 0; valor <= i; i++){
        saida.innerHTML += `<p>${i+1}</p>`;
    }
}

function limpar(){saida.innerHTML = "";}