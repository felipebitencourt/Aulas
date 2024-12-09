var input_nome = document.querySelector("#nome");
var input_cor = document.querySelector("#cor");
var saida = document.querySelector("#saida");

carregarCookies();

function guardar(event){

    event.preventDefault();

    localStorage.nome = input_nome.value;
    localStorage.cor = input_cor.value;
    console.log(localStorage);

    if(input_cor.value == "white"){document.body.style.color = "yellowgreen";}

    saida.classList.remove("d-none");
    document.body.style.backgroundColor = input_cor.value;

    saida.innerHTML = `<h2>Olá ( ${input_nome.value} ), vejo que escolhestes a cor ( ${input_cor.value} ).</h2>`;
}

function carregarCookies(){
    if(localStorage.nome != null && localStorage.cor != null){
        saida.classList.remove("d-none");
        input_nome.value = localStorage.nome;
        input_cor.value = localStorage.cor;
        document.body.style.backgroundColor = localStorage.cor;
    }
}

function limpar(){
    localStorage.clear();
    saida.classList.add("d-none");
    document.body.style.color = "goldenrod";
    document.body.style.backgroundColor = "black";
    saida.innerHTML = "";
    input_nome.value = "";
    input_cor.value = "";
    input_nome.focus();
}

// input[type="password"]{}