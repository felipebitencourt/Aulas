<?php

require_once("base_dados.php");

$form = isset($_GET["nome"]) && isset($_GET["preco"])  && isset($_GET["quantidade"]);
$form = $form && isset($_GET["codigo"]) && isset($_GET["fornecedor"]);

$nome = $_GET["nome"];

if($form){
    $nome = $_GET["nome"];
    $preco = floatval($_GET["preco"]);
    $quantidade = intval($_GET["quantidade"]);
    $codigo = intval($_GET["codigo"]);
    $fornecedor = $_GET["fornecedor"];
    
    iduSQL("INSERT INTO produtos (nome, preco, quantidade, codigo, fornecedor) VALUE ('$nome',$preco,$quantidade,$codigo,'$fornecedor')");

    header("Location: saida.php?nome=$nome");
}

$produtos = selectSQL("SELECT * FROM produtos");

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

    <h1>Papelaria 5</h1>

    <div class="caixa">

        <?php if(isset($_GET["nome"])):?>
            <h3>Você registrou o produto ( <?= $nome; ?> )</h3>
        <?php endif; ?>
        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Código</th>
                <th>Fornecedor</th>
            </tr>

            <?php foreach($produtos as $p): ?>

                <tr>
                    <td><?= $p["id"]; ?></td>
                    <td><?= $p["nome"]; ?></td>
                    <td><?= number_format($p["preco"], 2, ","); ?> €</td>
                    <td><?= $p["quantidade"]; ?></td>
                    <td><?= $p["codigo"]; ?></td>
                    <td><?= $p["fornecedor"]; ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

    </div>

    <a href="index.php"><button>Novo Cadastro</button></a>
  
</body>
</html>