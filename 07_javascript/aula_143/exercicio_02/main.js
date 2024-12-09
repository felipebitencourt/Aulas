var input_nome = document.querySelector("#nome");

function cookie(event){

    event.preventDefault();

    localStorage.nome = input_nome.value;
    console.log(localStorage);
}

// function verificarCookie(){
//     if(localStorage){}
// }