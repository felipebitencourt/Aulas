var pessoas = [];
var input_nome = document.querySelector("input[name='nome']");
var input_morada = document.querySelector("input[name='morada']");
var input_nif = document.querySelector("input[name='nif']");
var form = document.querySelector("form");
var table = document.querySelector("table");

function registrar(event){

    event.preventDefault();

    let existe = false;

    for(let p of pessoas){
        if(input_nome.value == p.nome){
            existe = true;
            // break;
        }
        else if(input_nif.value == p.nif){
            var nif = true;
            // break;
        }
        else if(input_morada.value == p.morada){
            var morada = true;
            // break;
        }
    }
    
    if(!existe || confirm("Este nome já existe, deseja prosseguir?")){
        table.innerHTML += `<tr><td>${input_nome.value}</td><td>${input_morada.value}</td><td>${input_nif.value}</td></tr>`;
        pessoas.push(novaPessoa(input_nome.value, input_morada.value, input_nif.value));
        console.log(pessoas);
        form.reset();
        input_nome.focus();
    }
    if(!nif || confirm("Este NIF já existe, deseja prosseguir?")){
        table.innerHTML += `<tr><td>${input_nome.value}</td><td>${input_morada.value}</td><td>${input_nif.value}</td></tr>`;
        pessoas.push(novaPessoa(input_nome.value, input_morada.value, input_nif.value));
        console.log(pessoas);
        form.reset();
        input_nome.focus();
    }
    if(!morada || confirm("Este morada já existe, deseja prosseguir?")){
        table.innerHTML += `<tr><td>${input_nome.value}</td><td>${input_morada.value}</td><td>${input_nif.value}</td></tr>`;
        pessoas.push(novaPessoa(input_nome.value, input_morada.value, input_nif.value));
        console.log(pessoas);
        form.reset();
        input_nome.focus();
    }

}

function novaPessoa(nome, morada, nif){
    let nova_pessoa = {
        nome: nome,
        morada: morada,
        nif: nif
    }
    return nova_pessoa;
}