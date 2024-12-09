var temp = 25;

function converterParaKelvin(){
    let kelvin = temp + 273.15;
    console.log("C para K: " + kelvin.toFixed(2));
}

function converterParaF(temp){
    let f = (temp * 1.8) + 32;
    return f;
}

function converterParaK(temp){
    let k = temp + 273.15;
    return k;
}

console.log("Temperatura em Celsius: " + temp);

converterParaKelvin(temp);
console.log("C para F: " + converterParaF(temp).toFixed(2));