<?php

require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 113.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria 7</h1>

    <h1>Lista de Produtos</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>

        <?php foreach($produtos as $p): ?>

            <form action="meio.php">

                <tr>
                    <td><?= $p["id"]; ?></td>
                    <td><?= $p["nome"]; ?></td>
                    <td><?= number_format($p["preco"], 2, ","); ?> €</td>
                    <td><?= $p["quantidade"]; ?></td>
                    <td><button name="editar" value="<?= $p["id"]; ?>" type="submit">Editar</button></td>
                </tr>

            </form>

        <?php endforeach; ?>

    </table>
  
</body>
</html>