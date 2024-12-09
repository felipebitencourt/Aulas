var saida = document.querySelector("#saida");

for(let i = 1; i<= 3; i++){saida.innerHTML += "<p> Teste for</p>"};

saida.innerHTML += "<hr>";

let loop = 1;

while(loop <= 3){
    saida.innerHTML += "<p> Teste While </p>"
    loop++;
}

saida.innerHTML += "<hr>";

let opcao = 1;

switch(opcao){
    case 1:
        saida.innerHTML += "<p> Caso 1 </p>";
        break;
    case 2:
        saida.innerHTML += "<p> Caso 2 </p>";
        break;
    case 3:
        saida.innerHTML += "<p> Caso 3 </p>";
        break;
    default:
        saida.innerHTML += "<p> Opção Inválida! </p>"

}

saida.innerHTML += "<hr>";

var objetos = ["cadeira", "mesa", "sofá"];

for(let i in objetos){
    let o = objetos[i];
    saida.innerHTML += `<p>${o}</p>`
};

saida.innerHTML += "<hr>";

// Melhor fazer desta forma abaixo:

var objetos = ["cadeira", "mesa", "sofá"];

for(let o of objetos){saida.innerHTML += `<p>${o}</p>`;}

saida.innerHTML += "<hr>";

objetos.forEach(teste);
function teste(e){saida.innerHTML += `<p>${e}</p>`;}

saida.innerHTML += "<hr>";

objetos.forEach(function(e){saida.innerHTML += `<p>${e}</p>`;});

saida.innerHTML += "<hr>";

objetos.forEach((e) => {saida.innerHTML += `<p>${e}</p>`;});








function gerarLista(event){

    event.preventDefault();

    let valor = parseInt(quantidade.value);

    limpar();
    for(let i = 0; valor <= i; i++){
        saida.innerHTML += `<p>${i+1}</p>`;
    }
}

function limpar(){saida.innerHTML = "";}