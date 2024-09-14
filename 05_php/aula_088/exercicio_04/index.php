<?php

require_once "funcoes.php";

$form = isset($_GET["numb"]);

if($form){
    $numb = intval($_GET["numb"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 88.4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <form action="">

        <label for="numb">Digite um número inteiro positivo:</label>
        <br>
        <input class="center" type="number" name="numb" autofocus required>

    </form>

    <?php if($form): ?>

        <h1>While: <?php loopWhile() ?> </h1> 

        <hr>
        
        <h1>For: <?php loopFor() ?> </h1> 

        <br><br>

        <a href="index.php"><button>Reset</button></a>

    <?php endif; ?>
        
</body>
</html>