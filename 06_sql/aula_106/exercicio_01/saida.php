<?php

require_once("base_dados.php");

$form = isset($_GET["id"]);

if($form){
    $resultado = intval($_GET["id"]);
}
else{
    header("Location: index.php");
    exit();
}

$papelaria = selectSQLUnico("SELECT * FROM produtos WHERE id=$resultado");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 106.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Papelaria - SQL</h1>

    <?php if(!empty($papelaria)): ?>

        <div class="caixa">

            <h3>Produto</h3>
            <h3>Código - <?= $papelaria["id"]; ?></h3>
            <h3>Nome: <?= $papelaria["nome"]; ?></h3>

            <br>

            <table>

                <tr>
                    <th>PREÇO</th>
                    <th>QUANTIDADE</th>
                </tr>

                <tr>
                    <td><?= number_format($papelaria["preco"], 2, ","); ?> €</td>
                    <td><?= $papelaria["quantidade"]; ?></td>
                </tr>

            </table>

        </div>

        <br>

        <div class="caixa">

            <?php print_r($papelaria); ?>

        </div>

    <?php else: ?>

        <div class="caixa">

            <h3>Não foi encontrado nenhum produto com o código (<?= $resultado; ?>)</h3>

        </div>

    <?php endif; ?>

    <a href="index.php"><button>Nova Busca</button></a>
    
</body>
</html>