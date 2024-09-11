<?php

$r = "";

$form = isset($_GET["raio"]);

if($form){
    $r = floatval($_GET["raio"]);
    $c = number_format(2 * pi() * $r, 2);
}

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 86.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Cálculo da Circunferência</h1>
    
    <div class="caixa">

        <form action="">
            <input class="center" type="number" name="raio" placeholder="RAIO" autofocus required step="0.01" min="0">
            <input type="submit" value="Calcular!">
        </form>
        
        <a href="index.php"><button>RESET</button></a>

    </div>

    <?php if($form): ?>

        <div id="saida">
            
            <h3 class="position_c"> <?= "$c";?> </h3>
            <h3 class="position_r"> <?= "$r";?> </h3>
            
        </div>

    <?php endif; ?>
   
</body>
</html>