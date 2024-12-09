<?php

require_once("base_dados.php");

$form = !empty($_GET["editar"]) && !empty($_GET["nome"]) && !empty($_GET["preco"]) && !empty($_GET["quantidade"]) && !empty($_GET["codigo"]) && !empty($_GET["fornecedor"]);

// iduSQL("UPDATE produtos SET preco = 1.25, nome='Caneta' WHERE id=3");
// iduSQL("UPDATE produtos SET preco = 1.25 WHERE nome LIKE '%X-Acto%'");


if($form){
    $id = intval($_GET["editar"]);
    $nome = $_GET["nome"];
    $preco = floatval($_GET["preco"]);
    $quantidade = intval($_GET["quantidade"]);
    $codigo = intval($_GET["codigo"]);
    $fornecedor = $_GET["fornecedor"];
    
    iduSQL("UPDATE  produtos SET nome='$nome', preco=$preco, quantidade=$quantidade, codigo=$codigo, fornecedor='$fornecedor' WHERE id=$id");  
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
  <title>Exercício 113.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria 7</h1>

    <div class="caixa">

        <h1>Produto (<?= $id; ?> - <?= $nome; ?>) alterado com sucesso!</h1>

    </div>

    <a href="index.php"><button>Voltar</button></a>
  
</body>
</html>