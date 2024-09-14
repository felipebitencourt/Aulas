<?php

$peso = 0;
$preco = 0;
$total = 0;

$form = isset($_GET["preco"]) && isset($_GET["peso"]);

if($form){
    $peso = floatval($_GET["peso"]);
    $preco = floatval($_GET["preco"]);
    $total = $preco * $peso;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 87.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>TALHO</h1>

    <div id="exit">

        <h3 id="position_peso"> <?= number_format($peso, 3);?> </h3>
        <h3 id="position_preco"> <?= number_format($preco,2);?> </h3>
        <h3 id="position_total"> <?= number_format($total,2);?> </h3>

    </div>
    
    <div class="caixa">
        
        <form action="">

            <?php if($form): ?>

                <input class="center" type="number" name="peso" placeholder="PESO" autofocus required step="0.001" min="0" value="<?= $peso; ?>">
                <input class="center" type="number" name="preco" placeholder="PREÇO/KG" autofocus required step="0.01" min="0" value="<?= $preco; ?>">
                <input type="submit" value="CALCULAR">

            <?php else: ?>

                <input class="center" type="number" name="peso" placeholder="PESO" autofocus required step="0.001" min="0">
                <input class="center" type="number" name="preco" placeholder="PREÇO/KG" autofocus required step="0.01" min="0">
                <input type="submit" value="CALCULAR">

            <?php endif; ?>

        </form>
        
        <a href="index.php"><button>RESET</button></a>

    </div>

</body>
</html>