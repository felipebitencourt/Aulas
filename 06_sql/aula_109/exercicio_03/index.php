<?php

require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");


$pagina = 1;
$elementos_por_pagina = 50;
$elemento_inicial = (($pagina - 1) * $elementos_por_pagina) + 1;

echo $elemento_inicial;

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 109.3</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

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
        <td><?= number_format($p["preco"], 2, ",", "."); ?> €</td>
        <td><?= $p["quantidade"]; ?></td>
        <td><?= $p["codigo"]; ?></td>
        <td><?= $p["fornecedor"]; ?></td>
      </tr>

    <?php endforeach; ?>

  </table>
  
</body>
</html>