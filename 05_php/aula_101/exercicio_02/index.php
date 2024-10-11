<?php

require_once("Pessoa.php");
require_once("globais.php");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 101.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="center">

        <h1>Classes PHP</h1>

        <div class="caixa caixa_tb">

            <table>

                <tr>
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Altura</th>
                    <th>Gênero</th>
                </tr>

                <?php foreach($pessoas as $i => $p): ?>

                    <tr>
                        <td><?= $i + 1; ?></td>
                        <?= $p->toString(); ?>
                    </tr>

                <?php endforeach; ?>

            </table>

        </div>

        <br><br>

        <div class="caixa">

            <pre> <?php print_r($pessoas); ?> </pre>

        </div>

    </div>

</body>
</html>