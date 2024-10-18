<?php

require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");

$form = isset($_GET["deletar"]) && isset($_GET["nome"]);

if($form){
    $id = intval($_GET["deletar"]);
    $nome = $_GET["nome"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 111.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php if($form): ?>

        <div class="caixa">

            <h1>Tem certeza que deseja apagar o produto (<?= $id; ?> - <?= $nome; ?>)?</h1>

            <form action="saida.php">

                <input type="hidden" name="deletar" value="<?= $id; ?>">
                <input type="hidden" name="nome" value="<?= $nome; ?>">

                <label for="sim">SIM</label>
                <input type="radio" name="certeza" id="sim" value="sim" required>
                <br>
                <label for="nao">NÃO</label>
                <input type="radio" name="certeza" id="nao" value="nao" required checked>

                <br><br>

                <input type="submit" value="Enviar">

            </form>    

        </div>

    <?php endif; ?>
  
</body>
</html>