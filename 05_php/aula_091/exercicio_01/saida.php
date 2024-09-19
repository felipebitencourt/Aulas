<?php

$form = isset($_GET["nome"]) && isset($_GET["nif"]) && isset($_GET["morada"]);
$form = $form && isset($_GET["pet"]) && isset($_GET["especie"]) && isset($_GET["cor"]);

if($form){
    $nome = $_GET["nome"];
    $nif = intval($_GET["nif"]);
    $morada = $_GET["morada"];
    $pet = $_GET["pet"];
    $cor = $_GET["cor"];
    $especie = $_GET["especie"];
}
else{
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 91.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Final</h1>

    <?php if($form): ?>

        <h3>Dono(a)</h3>

        <h4>
            Nome: <?= $nome; ?>
            <br>
            Morada: <?= $morada; ?>
            <br>
            NIF: <?= $nif; ?>
        </h4>

        <h3>Pet</h3>

        <h4>
            Nome: <?= $pet; ?>
            <br>
            Espécie: <?= $especie; ?>
            <br>
            Cor: <?= $cor; ?>
        </h4>

    <?php else: ?>
        <h3>Preencha o formulário!</h3>
        <br>
        <a href="index.php">Voltar</a>
    <?php endif; ?>

</body>
</html>