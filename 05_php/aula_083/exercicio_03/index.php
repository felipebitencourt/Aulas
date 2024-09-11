<?php

$a = 8;
$b = 3;

$soma = $a + $b;
$sub = $a - $b;
$mult = $a * $b;
$div = $a / $b;
$resto = $a % $b;
$potencia = $a ** $b;

echo "<h1> === Testes Matemáticos === </h1>";

echo "<h1> A = ($a) </h1>";
echo "<h1> B = ($b) </h1>";
echo "<hr>";
echo "<h1> SOMA = ($soma) </h1>";
echo "<h1> SUBTRAÇÃO = ($sub) </h1>";
echo "<h1> MULTIPLICAÇÃO = ($mult) </h1>";
// echo "<h1> DIVISÃO = " . round($div, 2) . "</h1>";
echo "<h1> DIVISÃO = " . number_format($div, 2) . "</h1>";
echo "<h1> RESTO = ($resto ) </h1>";
echo "<h1> POTÊNCIA = ($potencia) </h1>";

?>