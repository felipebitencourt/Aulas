<?php

$form = isset($_GET["pessoas"]);

if($form){
    $pessoas = $_GET["pessoas"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 95.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="center">

    <h1>Arrays com Chaves</h1>
    
    <div class="caixa center">

        <h3>Cadastro de Pessoas</h3>

        <form action="">

            <input type="text" name="pessoas[nome]" required autofocus placeholder="Nome">
            <br><br>
            <input type="number" name="pessoas[idade]" required min="1" placeholder="Idade">
            <br><br>
            <input type="number" name="pessoas[altura]" required step="0.01" placeholder="Altura">
            <br><br>
            <input type="submit" value="Cadastrar">

        </form>

    </div>

    <br><br>

    <?php if($form): ?>

        <div class="caixa">

            <?php

                echo "<br>";
                echo "Nome: " . $pessoas["nome"] . "<br>";
                echo "Idade: " . $pessoas["idade"] . "<br>";
                echo "Altura: " . number_format($pessoas["altura"], 2) . "<br><br>";
            
            ?>

            <a href="index.php"><button>Reset</button></a>

        </div>

        <br><br>
        
        <div class="caixa">

            <?php print_r($pessoas); ?>

        </div>

    <?php endif; ?>


</div>
</html>