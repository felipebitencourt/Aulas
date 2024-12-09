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
    <title>Exercício 117.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria<br>Perfil</h1>

    <nav>
        <a href="home.php"><button class="bg_bt">Home</button></a> | 
        <a href="produtos.php"><button class="bg_bt">Produtos</button></a> | 
        <a href="clientes.php"><button class="bg_bt">Clientes</button></a> | 
        <a href="perfil.php"><button class="bg_bt">Perfil</button></a> | 
        <a href="logout.php"><button class="bg_bt">Sair</button></a>
    </nav>

    <h3>Teus Dados</h3>

    <ul>
        <li>ID: ( <?= $usuario_encontrado["id"]; ?> )</li>
        <li>Nome: ( <?= $usuario_encontrado["nome"]; ?> )</li>
        <li>Apelido: ( <?= $usuario_encontrado["apelido"]; ?> )</li>
        <li>NIF: ( <?= $usuario_encontrado["nif"]; ?> )</li>
        <li>Login: ( <?= $usuario_encontrado["login"]; ?> )</li>
        <li>Data do Último Acesso: ( <?= $usuario_encontrado["data_ultimo_acesso"]; ?> )</li>
    </ul>

</body>
</html>