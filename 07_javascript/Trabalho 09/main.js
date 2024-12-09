var celsius = document.querySelector("#celsius");
var resultado = document.querySelector("#resultado");

function digitar(digitado){

    if(celsius.innerHTML.length == 10){celsius.innerHTML += "";}
    else if(digitado == "."){if(!celsius.innerHTML.includes(".")){celsius.innerHTML += digitado;}}
    else if(digitado == "-"){if(celsius.innerHTML.length == 0){celsius.innerHTML += digitado;}}
    else{celsius.innerHTML += digitado;}
    
    calcular();

}

function limpar(){
    celsius.innerHTML = "";
    resultado.innerHTML = "";
    calcular();
}

function calcular(){

    let temp = parseFloat(celsius.innerHTML);
    let k = temp + 273.15;
    let f = (temp * 1.8) + 32;

    if(!isNaN(temp)){
        resultado.innerHTML = `${temp.toFixed(2)} °C = ${f.toFixed(2)} °F <br><br>`;
        resultado.innerHTML += `${temp.toFixed(2)} °C = ${k.toFixed(2)} K <br><br>`;
    }
    else{resultado.innerHTML = "";}

}