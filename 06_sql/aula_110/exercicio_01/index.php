<?php

require_once("base_dados.php");

// Declarar variáveis
$where = "";
$coluna = "id";
$ordem = "ASC";
$menor = null;
$maior = null;

// Condições dos filtros
$form_dos_filtos = isset($_GET["coluna"]) && isset($_GET["ordem"]);
if($form_dos_filtos){
    $coluna = $_GET["coluna"];
    $ordem = $_GET["ordem"];
}

// Para ordenar por preço máximo e mínimo
// $form_menor = !empty($_GET["menor"]);
// if($form_menor){
//     $menor = floatval($_GET["menor"]);
//     $where .= "WHERE preco >= $menor"; // Pois esta variável estará na função do SQL
// }

// $form_maior = !empty($_GET["maior"]);
// if($form_maior){                           // Se, e nesse caso será sempre, $menor já terá algum valor atribuído, então o preço maior
//     $maior = floatval($_GET["maior"]); // já irá aparecer do outro lado da string, dentro do SQL, para fazer a baliza correta
//     if($menor != null){$where .= " AND preco <= $maior";}
//     else{$where .= "WHERE preco <= $maior";}
// }

$form_menor = !empty($_GET["menor"]);
$form_maior = !empty($_GET["maior"]);

if($form_menor && $form_maior){
    $menor = floatval($_GET["menor"]);
    $maior = floatval($_GET["maior"]);
    
    // Verificar se o valor de $menor é maior que o de $maior, se for, trocar
    if($menor > $maior) {
        $verificacao = $menor;
        $menor = $maior;
        $maior = $verificacao;
    }

    $where = "WHERE preco >= $menor AND preco <= $maior";
}
else{
    if($form_menor){
        $menor = floatval($_GET["menor"]);
        $where = "WHERE preco >= $menor";
    }

    if($form_maior){
        $maior = floatval($_GET["maior"]);
        if(!isset($where)){
            $where = "WHERE preco <= $maior";
        } 
        else{
            $where .= " AND preco <= $maior";
        }
    }
}


// Paginação
$pagina = 1;
if(!empty($_GET["pagina"])){$pagina = intval(($_GET["pagina"]));}

$buscar_total = selectSQLUnico("SELECT Count(*) AS total FROM produtos $where");
$total_elementos = intval($buscar_total["total"]);

$elementos_por_pagina = 4;
$total_paginas = ceil($total_elementos / $elementos_por_pagina);

if($pagina < 1){$pagina = 1;}
elseif($pagina > $total_paginas){$pagina = $total_paginas;}

$elementos_ignorados = ($pagina - 1) * $elementos_por_pagina;

// Para adicionar a abrevição (reticências) quando tiver vários buttons
$reticencias = 2;
$botao_inicial = $pagina - $reticencias; 
$botao_final = $pagina + $reticencias;

// Fórmula mágica para Selecionar TUDO da tabela produtos (Onde se houver baliza de preço) Ordenar pela $coluna (filtro) seguindo a $ordem (asc ou desc) Limitando os elementos a serem exibidos por páginas pré-estabelecidos compensando o que sobrar na próxima página
$produtos = selectSQL("SELECT * FROM produtos $where ORDER BY $coluna $ordem LIMIT $elementos_por_pagina OFFSET $elementos_ignorados");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 110.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Sistema de Paginação</h1>

    <div class="caixa">

        <form action="">

            <label for="coluna">Ordenar por: </label>

            <select name="coluna" id="coluna">

                <option value="id" <?= ($coluna == "id") ? "selected" : "" ; ?>>ID</option>
                <option value="nome" <?= ($coluna == "nome") ? "selected" : "" ; ?>>Nome</option>
                <option value="preco" <?= ($coluna == "preco") ? "selected" : "" ; ?>>Preço</option>
                <option value="quantidade" <?= ($coluna == "quantidade") ? "selected" : "" ; ?>>Quantidade</option>
                <option value="codigo" <?= ($coluna == "codigo") ? "selected" : "" ; ?>>Código</option>
                <option value="fornecedor" <?= ($coluna == "fornecedor") ? "selected" : "" ; ?>>Fornecedor</option>
            
            </select>

            <br><br>

            <label for="asc">Crescente: </label>
            <input type="radio" name="ordem" id="asc" value="ASC" <?= (!$form_dos_filtos || $form_dos_filtos && $ordem == "ASC") ? "checked" : ""; ?> >
           
            <br>

            <label for="desc">Decrescente: </label>
            <input type="radio" name="ordem" id="desc" value="DESC" <?= ($form_dos_filtos && $ordem == "DESC") ? "checked" : ""; ?>>
            
            <br><br>

            <input type="number" name="menor" placeholder="Preço Mínimo" min="0.01" step="0.01" value="<?= ($menor != null) ? number_format($menor, 2) : ""; ?>">
            <input type="number" name="maior" placeholder="Preço Máximo" min="0.01" step="0.01" value="<?= ($maior != null) ? number_format($maior, 2) : ""; ?>">
            
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
                <td><?= number_format($p["preco"], 2, ","); ?> €</td>
                <td><?= $p["quantidade"]; ?></td>
                <td><?= $p["codigo"]; ?></td>
                <td><?= $p["fornecedor"]; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

    <br><br>
    
    <form action="">

        <input type="hidden" name="coluna" value="<?= $coluna; ?>">
        <input type="hidden" name="ordem" value="<?= $ordem; ?>">

        <!-- Guardar as informações dos valores inseridos no input $menor -->
        <?php if($menor != null): ?>

            <input type="hidden" name="menor" value="<?= $menor; ?>">

        <?php endif; ?>

        <!-- Guardar as informações dos valores inseridos no input $maior -->
        <?php if($maior != null): ?>

            <input type="hidden" name="maior" value="<?= $maior; ?>">

        <?php endif; ?>

        <!-- Voltar tudo -->                
        <button name="pagina" value="1"> ←| </button> 

        <button name="pagina" value="<?= $pagina - 1; ?>"> ← </button>

        <?php if($botao_inicial > 1): ?>

            <span>...</span>

        <?php endif; ?>

        <?php for($i = $botao_inicial; $i <= $botao_final; $i += 1): ?>

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

    <br><br>

    <a href="index.php"><button>Voltar</button></a>
  
</body>
</html>