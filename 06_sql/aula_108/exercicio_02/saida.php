<?php

require_once("base_dados.php");

$form = isset($_GET["coluna"]) && isset($_GET["ordem"]);

if($form){
    $coluna = $_GET["coluna"];
    $ordem = $_GET["ordem"];
    // $produtos = selectSQL("SELECT * FROM produtos WHERE preco >= 1.00 AND preco <= 6.00 ORDER BY $coluna $ordem");
    $produtos = selectSQL("SELECT * FROM produtos WHERE preco BETWEEN 1.00 AND 6.00 ORDER BY $coluna $ordem");
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
    <title>Exercício 108.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Produto - SQL - com "WHERE"</h1>

    <?php if(!empty($produtos)): ?>

        <div class="caixa">

            <h3>Oredenado por ( <?= $coluna; ?> ):</h3>

            <table>

                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>PREÇO</th>
                    <th>QUANTIDADE</th>
                    <th>CÓDIGO</th>
                    <th>FORNECEDOR</th>
                </tr>

                <?php foreach($produtos as $p): ?>

                    <tr>
                        <td><?= $p["id"]; ?></td>
                        <td><?= $p["nome"]; ?></td>
                        <td><?= number_format($p["preco"], 2, ","); ?> €</td>
                        <td><?= $p["quantidade"]; ?></td>
                        <td><?= $p["codigo"]; ?></td>
                        <td><?= $p["fornecedor"]; ?></td>
                    </tr>
                    
                <?php endforeach; ?>

            </table>

        </div>

        <br>

        <div class="caixa">

            <pre><?php print_r($produtos); ?></pre>

        </div>

    <?php endif; ?>

    <a href="index.php"><button>Nova Busca</button></a>
    
</body>
</html>