<?php

require_once("base_dados.php");

$form = !empty($_GET["pagina"]);
$pagina = 1;
if($form){
  $pagina = intval($_GET["pagina"]);
}

$busca_por_total = selectSQLUnico("SELECT Count(*) AS total FROM produtos");
$total_elementos = intval($busca_por_total["total"]);
$elementos_por_pagina = 2;
$total_paginas = ceil($total_elementos / $elementos_por_pagina);
if($pagina < 1){$pagina = 1;}
elseif($pagina > $total_paginas){$pagina = $total_paginas;}
$elementos_ignorados = (($pagina - 1) * $elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $elementos_ignorados");

$abreviacao = 2;
$botao_inicio = $pagina - $abreviacao;
$botao_final = $pagina + $abreviacao;


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

  <br><br>

  <!-- <form action="">
    <input type="number" name="pagina" min="1" max="<?= $total_paginas ?>" placeholder="Nº Página" required autofocus>
    <input type="submit" value="Ir">
  </form> -->

  <form action="">

    <!-- Botão de Voltar Tudo -->
    <button name="pagina" value="1">|<</button>

    <!-- Botão de Voltar -->
    <button name="pagina" value="<?= $pagina - 1; ?>"><</button>

    <?php if($botao_inicio > 1): ?>
      <span>...</span>
    <?php endif; ?>

    <?php for($i=$botao_inicio; $i<=$botao_final; $i+=1): ?>

      <?php if($i >= 1 && $i <= $total_paginas): ?>
        <button name="pagina" class="<?= ($pagina == $i) ? "active" : ""; ?>" value="<?= $i; ?>"><?= $i; ?></button>
      <?php endif; ?>

    <?php endfor; ?>

    <?php if($botao_final < $total_paginas): ?>
      <span>...</span>
    <?php endif; ?>

    <!-- Botão de Avançar -->
    <button name="pagina" value="<?= $pagina + 1; ?>">></button>

    <!-- Botão de Avançar Tudo -->
    <button name="pagina" value="<?= $total_paginas ?>">>|</button>

  </form>
  
</body>
</html>