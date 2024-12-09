var entrada = document.getElementById("entrada");
var saida = document.getElementById("saida");
var i = 1;
var pos = 1;
var neg = -1;

// entrada.innerHTML += "<h3>Teste</h3>";
// saida.innerHTML = "Olá";

// function adicionarMagica(){
//     saida.innerHTML += "<p>Sou um parágrafo! (" + i + ")</p>";
//     i++;
// }

function adicionarMagica(){
    let novo_p = document.createElement("p");
    novo_p.innerHTML = `Novo parágrafo (${pos}) | Novo parágrafo (${neg})`;
    saida.appendChild(novo_p);
    pos ++;
    neg --;
}