var saida = document.querySelector("#saida");

var num = 3;
var frutas = ["morango", "uva", "jambo"];
let loop = 1;

console.log("num = " + num);
console.log(frutas);

while(loop <= num){
    saida.innerHTML += "<p> Dentro do WhHILE </p>";
    loop++;
}

saida.innerHTML += "<hr>";

switch(num){
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
        saida.innerHTML += "<p> Opção Inválida! </p>";

}

saida.innerHTML += "<hr>";

for(let i = 0; i < frutas.length; i++){saida.innerHTML += `<p> Teste utlizando FOR ( ${frutas[i]} ) </p>`;}

saida.innerHTML += "<hr>";

for(let i in frutas){
    let o = frutas[i];
    saida.innerHTML += `<p>Teste utlizando FOR IN ( ${o} )</p>`;
};

saida.innerHTML += "<hr>";

// Melhor fazer desta forma abaixo:

var objetos = ["cadeira", "mesa", "sofá"];

for(let o of frutas){saida.innerHTML += `<p>Teste utlizando FOR OF ( ${o} )</p>`;}
