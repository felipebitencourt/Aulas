<?php

$form = isset($_GET["nome"]) && isset($_GET["nif"]) && isset($_GET["morada"]);

if($form){
    $nome = $_GET["nome"];
    $nif = intval($_GET["nif"]);
    $morada = $_GET["morada"];
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

    <h1>Meio</h1>

    <form action="saida.php">
        <input type="hidden" name="nome" value="<?= $nome; ?>">
        <input type="hidden" name="nif" value="<?= $nif; ?>">
        <input type="hidden" name="morada" value="<?= $morada; ?>">
        <input class="center" type="text" name="pet" required placeholder="Pet*" autofocus>
        <br><br>
        <input class="center" type="text" name="especie" required placeholder="Espécie*">
        <br><br>
        <input class="center" type="text" name="cor" required placeholder="Cor*">
        <br><br>
        <input type="submit" value="Enviar!">
    </form>

</body>
</html>