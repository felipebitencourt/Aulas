<?php

require_once("base_dados.php");

$form = isset($_GET["valormin"]) && isset($_GET["valormin"]) && isset($_GET["ordem"]);

if($form){
    $valor_min = floatval($_GET["valormin"]);
    $valor_max = floatval($_GET["valormax"]);
    $ordem = $_GET["ordem"];
    $produtos = selectSQL("SELECT nome, preco FROM produtos WHERE preco BETWEEN $valor_min AND $valor_max ORDER BY preco $ordem");
}
else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 109.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Papelaria 4</h1>

    <div class="caixa">

        <?php if(!empty($produtos)): ?>


            <h1>Busca de preço entre</h1>
            (<?= number_format($valor_min, 2, ","); ?> €) e (<?= number_format($valor_max, 2, ","); ?> €)

            <br><br>

            <ul>

                <?php foreach($produtos as $p): ?>

                    <li><?= $p["nome"]; ?> - <?= number_format($p["preco"], 2, ","); ?> €</li>
                    
                <?php endforeach; ?>

            </ul>

        <?php else: ?>

            <p>Não foram encontrados produtos com preços entre (<?= number_format($valor_min, 2, ","); ?> €) e (<?= number_format($valor_max, 2, ","); ?> €).</p>

        <?php endif; ?>

    </div>

    <a href="index.php"><button>Nova Busca</button></a>
    
</body>
</html>