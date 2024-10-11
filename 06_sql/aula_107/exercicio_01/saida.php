<?php

require_once("base_dados.php");

$form = !empty($_GET["name"]);
$nome = "...";

if($form){
    $nome = $_GET["name"];
}
else{
    header("Location: index.php");
    exit();
}

$produto = selectSQL("SELECT * FROM produtos WHERE nome LIKE '%$nome%'");

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
    
    <h1>Produto - SQL</h1>

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

            <h3>Não foi encontrado nenhum produto com o nome ( <?= $nome; ?> ).</h3>

        </div>

    <?php endif; ?>

    <a href="index.php"><button>Nova Busca</button></a>
    
</body>
</html>