<?php

require_once("base_dados.php");

$where = "WHERE";

$form_dos_filtros = isset($_GET["coluna"]) && isset($_GET["ordem"]);

if($form_dos_filtros){
    $coluna = $_GET["coluna"];
    $ordem = $_GET["ordem"];
}


// ---------------- Sistema de paginação ------------------------------

$pagina = 1;
if(!empty($_GET["pagina"])){
  $pagina = intval($_GET["pagina"]);
}

$buscar_total = selectSQLUnico("SELECT Count(*) AS total FROM produtos");
$total_elementos = intval($buscar_total["total"]);

$elementos_por_pagina = 4;
$total_paginas = ceil($total_elementos / $elementos_por_pagina);

if($pagina < 1){$pagina = 1;}
elseif($pagina > $total_paginas){$pagina = $total_paginas;}

$elementos_ignorados = (($pagina - 1) * $elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $elementos_ignorados");

$reticencias = 3;
$botao_inicial = $pagina - $reticencias; 
$botao_final = $pagina + $reticencias;

// --------- Sistema dos filtros -----------------

$produtos = selectSQL("SELECT * FROM produtos ORDER BY  $coluna $ordem LIMIT  $elementos_por_pagina OFFSET $elementos_ignorados");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 111.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Sistema de Paginação</h1>

    <form class="caixa" action="">

        <label for="coluna">Ordenar por: </label>

        <select name="coluna" id="coluna">

            <option value="id">ID</option>
            <option value="nome">Nome</option>
            <option value="preco">Preço</option>
            <option value="quantidade">Quantidade</option>
            <option value="codigo">Código</option>
            <option value="fornecedor">Fornecedor</option>

        </select>

        <br><br>
    
        <label for="asc">Crescente</label>
        <input type="radio" name="ordem" id="asc" value="ASC" checked required>
        <br>
        <label for="asc">Decrescente</label>
        <input type="radio" name="ordem" id="desc" value="DESC" required>
        <br><br>
        <input type="submit" value="Buscar">

    </form>

    <br><br>
    
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

    <br><br>
    
    <form action="">

        <?php if($form_dos_filtros): ?>

            <input type="hidden" name="coluna" value="<?= $coluna; ?>">
            <input type="hidden" name="ordem" value="<?= $ordem; ?>">

        <?php endif; ?>
        

        <!-- Voltar tudo -->
                
        <button name="pagina" value="1"> ←| </button> 

        <button name="pagina" value="<?= $pagina - 1; ?>"> ← </button>

        <?php if($botao_inicial > 1): ?>

            <span>...</span>

        <?php endif; ?>

        <?php for($i = $botao_inicial; $i <= $total_paginas; $i += 1): ?>

            <?php if($i >= 1 && $i <= $total_paginas): ?>
            
                <button name="pagina" class="<?= ($pagina == $i) ? "active" : "" ; ?>" value="<?= $i; ?>"><?= $i; ?></button>

            <?php endif; ?>

        <?php endfor; ?>

        <?php if($botao_final < $total_paginas): ?>

            <span>...</span>

        <?php endif; ?>

        <button name="pagina" value="<?= $pagina + 1; ?>"> → </button>

        <!-- Avançar tudo -->

        <button name="pagina" value="<?= $total_paginas; ?>"> |→ </button>

    </form>
  
</body>
</html>