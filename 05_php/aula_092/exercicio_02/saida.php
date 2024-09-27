<?php

$form = isset($_GET["total"]) && isset($_GET["data_1"]) && isset($_GET["recibo_1"]);

if($form){
    $total = intval($_GET["total"]);
    $total_arrecadado = 0;
    for($i = 1; $i<=$total; $i += 1){
        if(!isset($_GET["recibo_$i"]) && isset($_GET["data_$i"])){
            header("Location: index.php");
            exit();
        }
        $total_arrecadado += number_format(floatval($_GET["recibo_$i"]), 2);
    }
    $iva = $total_arrecadado * 0.23;
    $valor_retido = $total_arrecadado - $iva;
}   
else{
    header("Location: index.php");
    exit();
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

    <h1>Final</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>VALOR</th>
            <th>DATA</th>
        </tr>

        <?php for($i = 1; $i <= $total; $i += 1): ?>

            <tr>
                <td> <?= $i; ?> </td>
                <td> <?= number_format(floatval($_GET["recibo_$i"]), 2); ?> € </td>
                <td> <?= date("d M Y", strtotime($_GET["data_$i"])); ?> </td>
            </tr>

        <?php endfor; ?>

    </table>

    <div class="info">
        <h3>Valor Retido: <?= number_format($valor_retido, 2); ?> € </h3>
        <h3>Valor IVA: <?= number_format($iva, 2); ?> € </h3>
        <h3>Valor Total Arrecado: <?= number_format($total_arrecadado, 2); ?> € </h3>
        <br><br>
        <a href="index.php">Voltar</a>
    </div>

</body>
</html>