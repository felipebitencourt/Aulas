<?php

require_once("base_dados.php");

$where = "";
$coluna = "id";
$direcao = "ASC";
$menor = null;
$maior = null;

$form_dos_filtos = isset($_GET["coluna"]) && isset($_GET["direcao"]);
if($form_dos_filtos){
  $coluna = $_GET["coluna"];
  $direcao = $_GET["direcao"];
}


$form_do_menor = !empty($_GET["menor"]);
if($form_do_menor){
  $menor = floatval($_GET["menor"]);
  $where .= "WHERE preco >= $menor";
}


$form_do_maior = !empty($_GET["maior"]);
if($form_do_maior){
  $maior = floatval($_GET["maior"]);
  if($menor != null){$where .= " AND preco <= $maior";}
  else{$where .= "WHERE preco <= $maior";}
}


$pagina = 1;
if(!empty($_GET["pagina"])){$pagina = intval($_GET["pagina"]);}

$busca_por_total = selectSQLUnico("SELECT Count(*) AS total FROM produtos $where");
$total_elementos = intval($busca_por_total["total"]);
$elementos_por_pagina = 4;
$total_paginas = ceil($total_elementos / $elementos_por_pagina);
if($pagina < 1){$pagina = 1;}
elseif($pagina > $total_paginas){$pagina = $total_paginas;}
$elementos_ignorados = (($pagina - 1) * $elementos_por_pagina);
$abreviacao = 4;
$botao_inicio = $pagina - $abreviacao;
$botao_final = $pagina + $abreviacao;



$produtos = selectSQL("SELECT * FROM produtos $where ORDER BY $coluna $direcao LIMIT $elementos_por_pagina OFFSET $elementos_ignorados");



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

  <div class="caixa">

    <form action="">

      <label for="coluna">Ordenar por: </label>
      <select name="coluna" id="coluna">
        <option value="id" <?= ($coluna == "id") ? "selected" : ""; ?>>ID</option>
        <option value="nome" <?= ($coluna == "nome") ? "selected" : ""; ?>>Nome</option>
        <option value="preco" <?= ($coluna == "preco") ? "selected" : ""; ?>>Preço</option>
        <option value="quantidade" <?= ($coluna == "quantidade") ? "selected" : ""; ?>>Quantidade</option>
        <option value="codigo" <?= ($coluna == "codigo") ? "selected" : ""; ?>>Código</option>
        <option value="fornecedor" <?= ($coluna == "fornecedor") ? "selected" : ""; ?>>Fornecedor</option>
      </select>

      <br><br>

      <label for="asc">Crescente:</label>
      <input type="radio" name="direcao" id="asc" value="ASC" <?= (!$form_dos_filtos || $form_dos_filtos && $direcao == "ASC") ? "checked" : ""; ?>>
      <br>
      <label for="desc">Decrescente:</label>
      <input type="radio" name="direcao" id="desc" value="DESC" <?= ($form_dos_filtos && $direcao == "DESC") ? "checked" : ""; ?>>

      <br><br>

      <input type="number" name="menor" placeholder="Preço Mínimo" min="0" step="0.01" value="<?= ($menor != null) ? number_format($menor, 2) : ""; ?>">
      <input type="number" name="maior" placeholder="Preço Máximo" min="0" step="0.01" value="<?= ($maior != null) ? number_format($maior, 2) : ""; ?>">

      <br><br>

      <input type="submit" value="Busca">

    </form>

  </div>

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

  <form action="">
      
    <input type="hidden" name="coluna" value="<?= $coluna; ?>">
    <input type="hidden" name="direcao" value="<?= $direcao; ?>">
    
    <?php if($menor != null): ?>
      <input type="hidden" name="menor" value="<?= $menor; ?>">
    <?php endif; ?>

    <?php if($maior != null): ?>
      <input type="hidden" name="maior" value="<?= $maior; ?>">
    <?php endif; ?>

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
  
  <br><br>

  <a href="index.php"><button>RESET</button></a>

</body>
</html>