<?php

require_once("base_dados.php");

$pesquisa = "???";
$form = !empty($_GET["pesquisa"]);
if($form){
  $pesquisa = $_GET["pesquisa"];
  $resultados = selectSQL("SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'");
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

    <?php if(!empty($resultados)): ?>

      <table>

        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Quantidade</th>
          <th>Código</th>
          <th>Fornecedor</th>
        </tr>

        <?php foreach($resultados as $p): ?>

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

    <?php else: ?>

      <p>Não foi encontrado resultados para a busca por ( <?= $pesquisa; ?> )</p>

    <?php endif; ?>

  </div>

  <a href="index.php">
    <button>Nova Busca</button>
  </a>
  
</body>
</html>