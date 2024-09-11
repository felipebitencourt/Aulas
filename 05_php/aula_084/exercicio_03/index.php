<?php

$nome = "";
$idade = "";
$morada = "";

if(isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["morada"])){
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
    <title>Exercício 84.2</title>
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

    <h3>Boa noite <?php echo "$nome, ";?> <?php echo "$idade, ";?> <?php echo $morada;?>!</h3>

</body>
</html>