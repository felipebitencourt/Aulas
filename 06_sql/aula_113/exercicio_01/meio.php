<?php

require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");

$form = isset($_GET["editar"]);

if($form){
    $id = $_GET["editar"];
    $produto_selecionado = selectSQLUnico("SELECT * FROM produtos WHERE id = $id");
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

    <?php if($form): ?>

        <div class="caixa">

            <form action="saida.php">

                <input type="hidden" name="editar" value="<?= $id; ?>">

                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" required value="<?= $produto_selecionado['nome']; ?>">
                <br><br>
                <label for="preco">Preço: </label><br>
                <input type="number" name="preco" id="preco" step="0.01" min="0.01" required value="<?= $produto_selecionado['preco']; ?>">
                <br><br>
                <label for="quantidade">Quantidade: </label><br>
                <input type="number" name="quantidade" min="1" id="quantidade" required value="<?= $produto_selecionado['quantidade']; ?>">
                <br><br>
                <label for="codigo">Código: </label><br>
                <input type="number" name="codigo" id="codigo" required value="<?= $produto_selecionado['codigo']; ?>">
                <br><br>
                <label for="fornecedor">Fornecedor: </label><br>
                <input type="text" name="fornecedor" id="fornecedor" required value="<?= $produto_selecionado['fornecedor']; ?>">
                
                <br><br>

                <input type="submit" value="Enviar">

            </form>    

        </div>

    <?php endif; ?>
  
</body>
</html>