<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 95.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Dicionários (Vetores Associativos)</h1>
    
</body>
</html>


<?php

echo "Como feito de costume <br><br>";

$pessoas = ["Fabricio", "Maria", "Joao"];

foreach($pessoas as $p){echo $p . "<br>";}

echo "<br>";

for($i = 0; $i < count($pessoas); $i += 1){
    echo ($i+1) . " - " . $pessoas[$i] . "<br>";
}

echo "<br><hr><br>";

foreach($pessoas as $index => $valor){
    echo ($index + 1) . " - " . $valor . "<br>";
}

echo "<br><hr><br> <h1>Nova forma como 'dicionários'</h1> ";

$p1 = ["Fabrício", "Covilhã", 111];
$p2 = ["João", "Porto", 222];
$p3 = ["Ana", "Faro", 333];

$p4 = [
    "nome" => "José",
    "morada" => "Alentejo",
    "nif" => 444
];

echo $p4["nome"] . "<br>";
echo $p4["morada"] . "<br>";
echo $p4["nif"] . "<br>";

$p4["morada"] = "Lisboa";

echo $p4["morada"] . "<br>";

?>