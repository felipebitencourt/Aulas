testes = document.querySelectorAll("button");
especial = document.getElementById("especial");

function mudar(){
    for(let i=0; i < testes.length; i++){
        testes[i].classList.toggle("depois");
        testes[i].innerHTML = `Novo-teste ${[i]} `;
    }
    especial.remove("especial");
}