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

    <?php if(!empty($produto)): ?>

    <div class="caixa">

        <table>

            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>PREÇO</th>
                <th>QUANTIDADE</th>
                <th>FORNECEDOR</th>
            </tr>

            <?php foreach($produto as $p): ?>

                <tr>
                    <td><?= $p["id"]; ?></td>
                    <td><?= $p["nome"]; ?></td>
                    <td><?= number_format($p["preco"], 2, ","); ?> €</td>
                    <td><?= $p["quantidade"]; ?></td>
                    <td><?= $p["fornecedor"]; ?></td>
                </tr>
                
            <?php endforeach; ?>

        </table>

    </div>

    <br>

    <div class="caixa">

        <pre><?php print_r($produto); ?></pre>

    </div>

    <?php else: ?>

    <div class="caixa">

        <p>Não foram encontrados produtos com preços entre (<?= number_format($valor_min, 2, ","); ?> €) e (<?= number_format($valor_max, 2, ","); ?> €).</p>

    </div>

    <?php endif; ?>
    
</body>
</html>