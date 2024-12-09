<?php

require_once("base_dados.php");

$elementos = selectSQL("SELECT * FROM produtos");

$coluna = array_keys($elementos[0]);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 114.3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria SQL</h1>

    <table>

        <tr>
            
            <?php foreach($coluna as $c): ?>

                <th><?= $c; ?></th>

            <?php endforeach; ?>

        </tr>

        <?php foreach($elementos as $e): ?>

            <tr>

                <?php foreach($coluna as $c): ?>

                    <td><?= $e[$c]; ?></td>

                <?php endforeach; ?>

            </tr>

        <?php endforeach; ?>

    </table>
  
</body>
</html>