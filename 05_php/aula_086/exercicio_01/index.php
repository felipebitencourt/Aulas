<?php

$c = 0.0;

$form = isset($_GET["celsius"]);

if($form){
    $c = floatval($_GET["celsius"]);
    $f = $c * 1.8 +32;
    $k = $c + 273.15;

    if($c <= 0){$img = "imagens/gelo.jpg";}
    elseif($c < 100){$img = "imagens/agua.jpg";}
    else{$img = "imagens/vapor.jpg";}
}

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 86.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Conversor de Temperaturas</h1>
    
    <div class="caixa">

        <form action="">
            <input class="center" type="text" name="celsius" placeholder="Celsius" autofocus required>
            <input type="submit" value="Calcular!">
        </form>
        
        <a href="index.php">Reset</a>

    </div>

    

    <?php if($form): ?>

        <div class="caixa">
            
            <h3> <?= "$c";?> ºC</h3>
            <h3> <?= "$f";?> ºF</h3>
            <h3> <?= "$k";?> K</h3>

            <img src="<?= $img; ?>" width="250">

        </div>

    <?php endif; ?>
   
</body>
</html>