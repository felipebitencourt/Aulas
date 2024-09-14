<?php

$euro = 0;
$moeda = 0;

$form = isset($_GET["euro"]);

if($form){
    $euro = floatval($_GET["euro"]);
    $moeda = $_GET["moeda"];
    $dolar = number_format($euro * 1.102, 2);
    $libras = number_format($euro * 0.84, 2);
    $reais = number_format($euro * 6.22, 2);
    $iene = number_format($euro * 156.77, 2);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 87.3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Conversor de Moedas</h1>

    <div class="caixa">

        <form action="">

            <label for="euro">VALOR EM EUROS</label>
            <br>

            <input type="number" name="euro" required autofocus step="0.01" min="0.01" value="<?= ($form) ? $euro : ""; ?>">
            <br><br>

            <div>CONVERTER PARA</div>
            <br><br>

            <div id="edit_form">

                <div>
                    <label for="dolar">DÓLAR</label>
                    <br>
                    <input type="radio" name="moeda" id="dolar" required step="0.01" min="0.01" value="dolar" <?= ($moeda == "dolar") ? "checked" : ""; ?> >
                </div>

                <div>
                    <label for="libras">LIBRAS</label>
                    <br>
                    <input type="radio" name="moeda" id="libras" required step="0.01" min="0.01" value="libras" <?= ($moeda == "libras") ? "checked" : ""; ?> >
                </div>

                <div>
                    <label for="reais">REAIS</label>
                    <br>
                    <input type="radio" name="moeda" id="reais" required step="0.01" min="0.01" value="reais" <?= ($moeda == "reais") ? "checked" : ""; ?> >
                </div>

                <div>
                    <label for="iene">IENE</label>
                    <br>
                    <input type="radio" name="moeda" id="iene" required step="0.01" min="0.01" value="iene" <?= ($moeda == "iene") ? "checked" : ""; ?> >
                </div>

            </div>
            
            <br><br>
            <input type="submit" value="CALCULAR!">

        </form>

    </div>
    
    <?php if($form): ?>

        <div class="caixa">
            
            <?php if($moeda == "dolar"): ?>

                <h2> ( <?= "$euro €" ?> ) = ( <?= "$ $dolar" ?> ) </h2> 

            <?php elseif($moeda == "libras"): ?>

                <h2> ( <?= "$euro €" ?> ) = ( <?= "£ $libras" ?> ) </h2>

            <?php elseif($moeda == "reais"): ?>

                <h2> ( <?= "$euro €" ?> ) = ( <?= "R$ $reais" ?> ) </h2>

            <?php elseif($moeda == "iene"): ?>

                <h2> ( <?= "$euro €" ?> ) = ( <?= "¥ $iene" ?> ) </h2>

            <?php endif; ?>

            <a href="index.php"><button>RESET!</button></a>

        </div>
    
    <?php endif; ?>

</body>
</html>