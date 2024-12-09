var saida = document.querySelector("#saida");
var input_nome = document.querySelector("input[name='nome']");
var input_peso = document.querySelector("input[name='peso']");
var input_altura = document.querySelector("input[name='altura']");
const FORM = document.querySelector("form");

var pessoas = [];

function novaPessoa(nome, peso, altura, imc){
    
    let nova_pessoa = {
        nome: nome,
        peso: peso,
        altura: altura,
        imc: imc
    };
    return nova_pessoa;
}

function calcular(event){

    novaPessoa();
    
    event.preventDefault();
    
    let nome = input_nome.value;
    let peso = parseFloat(input_peso.value);
    let altura = parseFloat(input_altura.value);
    let imc = peso / (altura ** 2);
    
    saida.innerHTML += `${input_nome.value} - ${peso}Kg - ${altura}m - ${imc.toFixed(2)} <br><br>`;
    
    FORM.reset();
    input_nome.focus();

    pessoas.push(novaPessoa(nome, peso, altura, imc));

    console.log(pessoas);
}

function limpar(){
    saida.innerHTML = "";
    saida.style.display = "none";
    input_temp.value = "";
}