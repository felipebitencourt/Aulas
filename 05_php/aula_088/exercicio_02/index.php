<?php

function calcularIMC($peso,$altura){
    $imc = $peso / $altura ** 2;
    echo "IMC = " . number_format($imc, 1);
}

calcularIMC(61, 1.71);

echo "<br><br>";

function descontar10($valor){
    return $valor * 0.9;
}

$desconto1 = descontar10(90) - 5;
echo $desconto1;

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 88.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    
        
</body>
</html>