<?php

require_once("base_dados.php");
require_once("helpers/colaboradores_helper.php");
$usuario_encontrado = verificarLogado();

if(empty($usuario_encontrado)){
    header("Location: index.php");
    exit();
}

$elementos = selectSQL("SELECT * FROM produtos");
$colunas = array_keys($elementos[0]);

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 117.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria<br>Produtos</h1>

    <nav>
        <a href="home.php"><button class="bg_bt">Home</button></a> | 
        <a href="produtos.php"><button class="bg_bt">Produtos</button></a> | 
        <a href="clientes.php"><button class="bg_bt">Clientes</button></a> | 
        <a href="perfil.php"><button class="bg_bt">Perfil</button></a> | 
        <a href="logout.php"><button class="bg_bt">Sair</button></a>
    </nav>

    <h3>Tabela dos Produtos</h3>

    <table>

        <tr>

            <?php foreach($colunas as $c): ?>
                <th><?= $c; ?></th>
            <?php endforeach; ?>

        </tr>

        <?php foreach($elementos as $e): ?>

            <tr>
                <?php foreach($colunas as $c): ?>
                    <td><?= $e[$c]; ?></td>
                <?php endforeach; ?>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>