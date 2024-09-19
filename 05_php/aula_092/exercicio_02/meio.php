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
    <title>Exercício 92.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Meio</h1>

    <form action="saida.php">

        <input type="hidden" name="total" value=" <?= $total; ?>">

        <?php for($i = 1; $i <= $total; $i += 1): ?>
            <label for="recibo">Recibo <?= $i; ?>: </label>
            <input type="number" name="recibo_<?= $i; ?>" required placeholder = "Valor <?= $i; ?>" autofocus step=0.01 min="0.01">
            <input type="date" name="data" id="data" required>
            <br><br>
        <?php endfor; ?>

        <input type="submit" value="Registrar">

    </form>

</body>
</html>