<?php

require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");

$form = isset($_GET["deletar"]) && isset($_GET["certeza"]) && isset($_GET["nome"]);

if($form){
    $id = intval($_GET["deletar"]);
    $certeza = $_GET["certeza"];
    $nome = $_GET["nome"];

    if($certeza == "nao"){
        header("Location: index.php");
    }
    else{
        iduSQL("DELETE FROM produtos WHERE id=$id");
    }
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

    <h1>Papelaria 7</h1>

    <div class="caixa">

        <h1>Produto (<?= $id; ?> - <?= $nome; ?>) deletado com sucesso!</h1>

    </div>

    <a href="index.php"><button>Voltar</button></a>
  
</body>
</html>