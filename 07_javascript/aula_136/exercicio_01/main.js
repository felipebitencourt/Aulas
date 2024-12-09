var saida = document.querySelector("#saida");
var input_temp = document.querySelector("input[name='temp']");

saida.style.display = "none";

function calcular(){

    var temp = parseFloat(input_temp.value);
    let k = temp + 273.15;
    let f = (temp * 1.8) + 32;

    saida.innerHTML = `${temp.toFixed(1)} °C <br><br>`;
    saida.innerHTML += `${f.toFixed(1)} °F <br><br>`;
    saida.innerHTML += `${k.toFixed(1)} K <br><br>`;
    if(temp <= 0){saida.innerHTML += `<img src="imagens/gelo.jpg" alt="Gelo" style="width: 300px; border-radius: 50px">`;}
    else if(temp <=99){saida.innerHTML += `<img src="imagens/agua.jpg" alt="Água" style="width: 300px; border-radius: 50px">`;}
    else{saida.innerHTML += `<img src="imagens/vapor.jpg" alt="Vapor" style="width: 300px; border-radius: 50px">`;}

    if(!isNaN(temp)){saida.style.display = "inline-block";}
    else{saida.style.display = "none";}
}

function limpar(){
    saida.innerHTML = "";
    saida.style.display = "none";
    input_temp.value = "";
}