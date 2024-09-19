<?php

$form = isset($_GET["total"]);

if($form){
    $total = intval($_GET["total"]);
    $media = 0;
    $total_idades = 0;
    for($i = 1; $i<=$total; $i += 1){
        if(isset($_GET["idade_$i"])){
            $total_idades += intval($_GET["idade_$i"]);
        }
        else{
            header("Location: index.php");
            exit();
        }
    }
    $media = $total_idades / $total;
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
    <title>Exercício 92.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Final</h1>

    <h3>Média das idades: <?= number_format($media, 1); ?></h3>

    <table>

        <tr>
            <th>Aluno(a)</th>
            <th>Idade</th>
        </tr>

        <?php for($i = 1; $i <= $total; $i += 1): ?>

        <tr>
            <td> <?= $i; ?> </td>
            <td> <?=  intval($_GET["idade_$i"]); ?> </td>
        </tr>

        <?php endfor; ?>


    </table>

</body>
</html>