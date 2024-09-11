<?php

$nome = "";
$cor = "black";

$form = isset($_GET["nome"]) && isset($_GET["cor"]);

if($form){
    $nome = $_GET["nome"];
    $cor = $_GET["cor"];
}

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 85.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center" style="background-color: <?= $cor ?>;">

    <h1>Teste de Formulário</h1>
    
    <form action="" class="center">

        <input class="center" type="text" name="nome" placeholder="Nome">
        <br><br>
        <input class="center" type="text" name="cor" placeholder="Cor em Inglês">
        <br><br>
        <input type="submit" value="Vamos!">
        
    </form>

    <?php if($form): ?>

        <br><br>
        <h3>Olá <?= "$nome";?>, vejo que escolheu a cor: <?= "$cor";?>.</h3>

    <?php endif; ?>
   
</body>
</html>