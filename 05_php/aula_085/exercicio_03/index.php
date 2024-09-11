<?php

$c = 0.0;

$form = isset($_GET["celsius"]);

if($form){
    $c = $_GET["celsius"];
}

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 85.3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Conversor de Temperaturas</h1>
    
    <div class="caixa">

        <form action="">
            <input class="center" type="text" name="celsius" placeholder="Celsius">
            <input type="submit" value="Calcular!">
        </form>
        
        <a href="index.php">Reset</a>

    </div>

    <?php
        $f = $c * 1.8 +32;
        $k = $c + 273.15;
    ?>

    <?php if($form): ?>

        <div class="caixa">
            
            <h3> <?= "$c";?> ºC</h3>
            <h3> <?= "$f";?> ºF</h3>
            <h3> <?= "$k";?> K</h3>

            <?php if($c <= 0): ?>
                <img src="imagens/gelo.jpg" alt="Gelo" style="width: 300px;">
            <?php elseif($c < 100): ?>
                <img src="imagens/agua.jpg" alt="Água" style="width: 300px;">
            <?php else: ?>
                <img src="imagens/vapor.jpg" alt="Vapor" style="width: 300px;">
            <?php endif; ?>

        </div>

    <?php endif; ?>
   
</body>
</html>