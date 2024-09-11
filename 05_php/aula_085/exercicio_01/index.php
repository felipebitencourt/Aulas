<?php

$nome = "";
$idade = "";
$morada = "";

$form = isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["morada"]);

if($form){
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $morada = $_GET["morada"];
}

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 85.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Site</h1>
    
    <form action="">

        <input type="text" name="nome" placeholder="Nome">
        <br><br>
        <input type="number" name="idade" placeholder="Idade">
        <br><br>
        <input type="text" name="morada" placeholder="Morada">
        <br><br>
        <input type="submit" value="Enviar">

    </form>

    <?php if($form): ?>
        
        <h3>Boa noite <?= "$nome, ";?> <?php echo "$idade, ";?> <?= $morada;?>!</h3>

    <?php endif; ?>

    

</body>
</html>