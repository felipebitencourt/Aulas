<?php

$form = isset($_GET["numero"]);

if($form){
    $numero= intval($_GET["numero"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 89.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>ÚLTIMOS LIVROS</h1>

    <?php if($form): ?>

        <?php for($i = 1; $i<=$numero; $i += 1): ?>

            <div class="caixa">

                <div class="card">

                    <img src="imagens/<?= rand(1,5) ?>.jpg" alt="Livro 1">
                    <h3  class="center"> LIVRO <?= $i; ?> </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae unde ea tempore inventore atque officiis quod, veritatis magni blanditiis at!
                    </p>

                </div>

            </div>

        <?php endfor; ?>

        <a href="index.php"><button>Voltar</button></a>

    <?php endif; ?>

</body>
</html>