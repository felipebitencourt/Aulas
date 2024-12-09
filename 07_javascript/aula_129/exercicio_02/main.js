// function converterEuroDolar(euro){
//     let resultado = euro * 1.06;
//     console.log(Math.round(resultado));
// }

// function converterEuroDolar(euro){
//     let resultado = euro * 1.06;
//     console.log(resultado.toFixed(2)) + " €";
// }

// function converterEuroLibra(){
//     let resultado = euro * 0.83;
//     return resultado;
// }

// converterEuroDolar(30);

// console.log("\n====================\n\n");

// var valor_1 = converterEuroLibra(20) + 5;
// console.log(valor_1.toFixed(2) + " £");

// var valor_2 = converterEuroLibra(20) - 5;
// console.log(valor_1.toFixed(2) + " £");

var temp = 25;

function converterParaKelvin(temp){
    let kelvin = temp + 273.15;
    console.log("C para K: " + kelvin.toFixed(2));
}

function converterParaF(temp){
    let f = (temp * 1.8) + 32;
    return f;
}

console.log("Temperatura em Celsius: " + temp);

converterParaKelvin(temp);
console.log("C para F: " + converterParaF(temp).toFixed(2));