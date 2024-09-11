<?php

$nome = "Felipe Bitencourt";
$idade = 27;
$resultado = "";

echo "<h1> === Verificação de Idade === </h1>";

echo "<h2> Nome: $nome </h2>";
echo "<h2> Idade: $idade </h2>";

echo "<hr>";

if($idade <= 11 && $idade >= 1){$resultado = "CRIANÇA";}
elseif($idade < 18){$resultado = "ADOLESCENTE";}
elseif($idade < 33){$resultado = "JOVEM ADULTO";}
elseif($idade < 60){$resultado = "ADULTO";}
elseif($idade >= 60){$resultado = "IDOSO";}
elseif($idade <= 0){echo "IDADE INVÁLIDA!";}

echo "<marquee scrollamount = '12'> <b>$nome</b> possui <b>$idade</b> anos de idade, logo é um(a) <b>$resultado</b>. </marquee>";

?>