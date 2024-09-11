<?php

$ano_atual = 2024;
$idade = 27;
$nasc = $ano_atual - $idade;

echo "<h1> === Cálculo Nascimento === </h1>";

echo "<h1> Ano atual: $ano_atual </h1>";
echo "<h1> Idade: $idade </h1>";
echo "<h1> Resultado: $nasc </h1>";

echo "<hr>";

$ano = date("Y");
$mes = date("m");
$dia = date("d");
$teste = date("e H:i:s -- d/m/Y");

echo $ano;
echo "<br>";
echo $mes;
echo "<br>";
echo $dia;
echo "<br>";
echo $teste;

?>