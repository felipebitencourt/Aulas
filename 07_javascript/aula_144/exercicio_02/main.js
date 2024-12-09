var fabricio = new Pessoa("Fabrício Vidal", 29, "Covilhã");
var maria = new Pessoa("Maria Silva", 21, "Lisboa");
var ana = new Pessoa("Ana Sousa", 33, "Porto");

console.log(fabricio.toString());
console.log(maria.toString());
console.log(fabricio.toString());

fabricio.complertarAnos();
maria.novaMorada("Braga");
ana.casou("Matos");


console.log("============================");


var pessoas = [
    new Pessoa("Sofia Lima", 34, "Almada"),
    new Pessoa("José Silva", 23, "Setúbal"),
    new Pessoa("João Miguel", 45, "Beja")
];

pessoas[0].nome;
pessoas[1].morada;
pessoas[2].toString();

for(let p of pessoas){
    console.log(p.toString());
}