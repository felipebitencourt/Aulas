<?php

date_default_timezone_set("Europe/Lisbon");
$data_atual = date("H:i:s");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 141.2</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>

</head>
<body>

    <h1>Javascript</h1>

    <div class="caixa">

        <h1>PHP</h1>
        <h1><?= $data_atual;?></h1>

    </div>

    <br><br>

    <div class="caixa">

        <h1>Javascript</h1>
        <h1 id="saida"></h1>

    </div>

    <br><br>

    <div class="caixa">

        <h1>Javascript 2</h1>

        <h1 class="barra" id="horas"></h1>
        <h1 class="barra" id="minutos"></h1>
        <h1 class="barra" id="segundos"></h1>
        <h1 class="barra" id="milisegundos"></h1>

    </div>

    <br><br>

    <div class="caixa">

        <h1>Javascript 3</h1>
        <br>
        
        <div id="relogio">

            <div class="ponteiro" id="ponteiro_horas"></div>
            <div class="ponteiro" id="ponteiro_minutos"></div>
            <div class="ponteiro" id="ponteiro_segundos"></div>

        </div>
        <br>

    </div>

    <br><br>
        
</body>
</html>