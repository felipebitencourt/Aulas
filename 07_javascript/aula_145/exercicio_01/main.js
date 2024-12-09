var saida = document.querySelector("#saida");
var table = document.querySelector("table");
var input_nome = document.querySelector("#nome");
var input_idade = document.querySelector("#idade");
var input_altura = document.querySelector("#altura");
var input_genero = document.querySelector("#genero");

var pessoas = [
    new Pessoa("Sofia Lima", 34, "Almada", "Feminino"),
    new Pessoa("José Silva", 23, "Setúbal", "Masculino"),
    new Pessoa("João Miguel", 45, "Beja", "Masculino")
];

function cadastrar(event){

    event.preventDefault();
    saida.classList.remove("d-none");

    let nome = input_nome.value;
    let idade = parseInt(input_idade.value);
    let genero = input_genero.value;
    let altura = parseFloat(input_altura.value);

    let nova_pessoa = new Pessoa(nome, idade, altura, genero);

    pessoas.push(nova_pessoa);
    console.log(pessoas);
    
}

function novaPessoa(nome, peso, altura, genero){return new Pessoa(nome, peso, altura, genero);}

function limpar(){
    saida.classList.add("d-none");
    table.innerHTML = "";
    input_nome.value = "";
    input_idade.value = "";
    input_altura.value = "";
    input_genero.value = "";
    input_nome.focus();
}