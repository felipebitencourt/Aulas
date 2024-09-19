<?php

$form = isset($_GET["total"]);

if($form){
    $total = intval($_GET["total"]);
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
    <title>Exercício 92.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Meio</h1>

    <form action="saida.php">

        <input type="hidden" name="total" value=" <?= $total; ?>">

        <?php for($i = 1; $i <= $total; $i += 1): ?>
            <input type="number" name="idade_<?= $i; ?>" required placeholder="Idade <?= $i; ?>" autofocus>
            <br><br>
        <?php endfor; ?>

        <br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>