var saida = document.querySelector("#saida");
var input_peso = document.querySelector("input[name='peso']");
var input_altura = document.querySelector("input[name='altura']");
var input_nome = document.querySelector("input[name='nome']");

function calcularIMC(event){

    event.preventDefault();

    let nome = input_nome.value;
    let peso = parseFloat(input_peso.value);
    let altura = parseFloat(input_altura.value);

    let resultado = peso / (altura**2);

    limpar();

    saida.innerHTML += `O(A) paciente ( ${nome} ) tem o IMC = (${resultado.toFixed(1)}).`;
}

function limpar(){saida.innerHTML = "";}