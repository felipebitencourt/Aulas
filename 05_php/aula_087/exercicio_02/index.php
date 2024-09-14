<?php

$form = isset($_GET["opcao"]);

if($form){
    $opcao = $_GET["opcao"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 87.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>PHP</h1>

    <div class="caixa">

        <h1>Você escolheu a opção ( <?= ($form) ? $opcao : "?"; ?> )</h1>

    </div>
    
    <div class="caixa">
        
        <form action="">
            
            <label>Item Extra</label>

            <br><br>

            <label for="queijo">Queijo</label>
            <input type="radio" name="opcao" id="queijo" required value="Queijo" <?= ($opcao == "Queijo") ? "checked" : ""; ?> >

            <br>

            <label for="bacon">Bacon</label>
            <input type="radio" name="opcao" id="bacon" required value="Bacon" <?= ($opcao == "Bacon") ? "checked" : ""; ?> >

            <br>

            <label for="fiambre">Fiambre</label>
            <input type="radio" name="opcao" id="fiambre" required value="Fiambre" <?= ($opcao == "Fiambre") ? "checked" : ""; ?> >

            <br><br>

            <input type="submit" value="Enviar">

        </form>
        
    </div>

</body>
</html>