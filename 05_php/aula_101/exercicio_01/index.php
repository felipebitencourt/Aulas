<?php

require_once("Pessoa.php");

// require("components/header.php");
// require("views/index_view.php");
// require("components/footer.php");

$pessoas = [];

$p1 = new Pessoa("Fabrício", "Covilhã", 28);

print_r($p1);

echo "<br><br>";

echo $p1->nome."<br>";
echo $p1->morada."<br>";
echo $p1->idade."<br>";

echo "<br><hr><br>";

$p1->morada = "Lisboa";

echo $p1->nome."<br>";
echo $p1->morada."<br>";
echo $p1->idade."<br>";

echo "<br><hr><br>";

$pessoas = [
    new Pessoa("Felipe", "Porto", 27),
    new Pessoa("Maria", "Lisboa", 31),
    new Pessoa("João", "Braga", 20),
];

foreach($pessoas as $p){
    echo $p->nome . " - " . $p->morada . " - " . $p->idade . "<br>";
}

echo "<br><hr><br>";

foreach($pessoas as $p){$p->toString();}

echo "<hr>";

$pessoas[1]->completarAnos();

foreach($pessoas as $p){$p->toString();}

?>