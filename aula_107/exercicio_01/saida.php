<?php

require_once("base_dados.php");

$id = "???";
$form = !empty($_GET["id"]);
if($form){
  $id = ($_GET["id"]);
  $produto_especifico = selectSQLUnico("SELECT * FROM produtos WHERE id=$id");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 107.1</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <h1>Empresa - Saída</h1>

  <div class="caixa">

    <?php if(!empty($produto_especifico)): ?>

      <h3>Produto</h3>
      <h3>(Código - <?= $produto_especifico["id"]; ?>)</h3>
      <h3>(Nome: <?= $produto_especifico["nome"]; ?>)</h3>
      <h3>(Fornecedor: <?= $produto_especifico["fornecedor"]; ?>)</h3>

      <table>
        <tr>
          <th>Preço</th>
          <th>Quantidade</th>
        </tr>
        <tr>
          <td><?= number_format($produto_especifico["preco"], 2, ",", "."); ?> €</td>
          <td><?= $produto_especifico["quantidade"]; ?></td>
        </tr>
      </table>

    <?php else: ?>

      <h3>Não foi encontrado nenhum produto com o código (<?= $id; ?>).</h3>

    <?php endif; ?>

  </div>

  <?php if($form): ?>

    <div class="caixa">
      <pre><?php print_r($produto_especifico); ?></pre>
    </div>

  <?php endif; ?>

  <a href="index.php">
    <button>Nova Busca</button>
  </a>
  
</body>
</html>