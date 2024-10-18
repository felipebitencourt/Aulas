<?php

require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 111.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria 7</h1>

    <div class="caixa">

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
                        <td><button name="deletar" value="<?= $p["id"]; ?>" type="submit">X</button></td>
                        <input type="hidden" name="nome" value="<?= $p["nome"]; ?>">
                    </tr>

                </form>

            <?php endforeach; ?>

        </table>

    </div>
  
</body>
</html>