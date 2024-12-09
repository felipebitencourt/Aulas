<?php

require_once("helpers/colaboradores_helper.php");
$usuario_encontrado = verificarLogado();

if(empty($usuario_encontrado)){
    header("Location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 115.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria<br>Home</h1>

    <nav>
        <a href="home.php"><button class="bg_bt">Home</button></a> | 
        <a href="produtos.php"><button class="bg_bt">Produtos</button></a> | 
        <a href="clientes.php"><button class="bg_bt">Clientes</button></a> | 
        <a href="perfil.php"><button class="bg_bt">Perfil</button></a> | 
        <a href="logout.php"><button class="bg_bt">Logout</button></a>
    </nav>

    <h3>Bem-vindo(a) <?= $usuario_encontrado["nome"] ?>!</h3>

    <p>Data do último acesso: ( <?= $usuario_encontrado["data_ultimo_acesso"]; ?> )</p>

</body>
</html>