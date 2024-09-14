<?php

$moeda = "dolar";

$form = isset($_GET["euro"]) && isset($_GET["moeda"]);

if($form){
    $euro = floatval($_GET["euro"]);
    $moeda = $_GET["moeda"];
    
    switch($moeda){

        case "dolar":
            $resultado = "$ " .  number_format($euro * 1.102, 2);
            break;
    
        case "libras":
            $resultado = "£ " .  number_format($euro * 0.84, 2);
            break;
    
        case "reais":
            $resultado = "R$ " .  number_format($euro * 6.22, 2);
            break;
    
        case "iene":
            $resultado = "¥ " . number_format($euro * 156.77, 0);
            break;
    
        default:
            $resultado = "OPÇÃO INVÁLIDA";
            break;
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 88.1</title>
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
                    <input type="radio" name="moeda" id="libras" required value="libras" <?= ($moeda == "libras") ? "checked" : ""; ?> >
                </div>

                <div>
                    <label for="reais">REAIS</label>
                    <br>
                    <input type="radio" name="moeda" id="reais" required value="reais" <?= ($moeda == "reais") ? "checked" : ""; ?> >
                </div>

                <div>
                    <label for="iene">IENE</label>
                    <br>
                    <input type="radio" name="moeda" id="iene" required value="iene" <?= ($moeda == "iene") ? "checked" : ""; ?> >
                </div>

            </div>
            
            <br><br>
            <input type="submit" value="CALCULAR!">

        </form>

    </div>

    <?php if($form): ?>

        <div class="caixa">
            
            <h2> (<?= number_format($euro, 2) ?> €) = ( <?= $resultado; ?> ) </h2>

            <a href="index.php"><button>RESET!</button></a>

        </div>

    <?php endif; ?>
        
</body>
</html>