<?php

$inteiro = 12;
$float = 12.123;
$booleano = true;
$string = "Exemplo de string";
$int_negativo = -9;

const NOME_DA_EMPRESA = "Codemaster";
define("TESTE", -45.12);

echo "Inteiro: " . $inteiro;
echo "<h1 style = 'color: green';>" . $inteiro . "</h1>";
echo "<h1 style = 'color: red;'> $float </h1>";
echo "<h1 style = 'color: blue;'> $booleano </h1>";
echo "<h1 style = 'color: brown;'> $string </h1>";
echo "<h1 style = 'color: purple;'> $int_negativo </h1>";

echo "<h1>" . NOME_DA_EMPRESA . "</h1>";
echo "<h1 style = 'color: coral;'>" . TESTE . "</h1>";

?>