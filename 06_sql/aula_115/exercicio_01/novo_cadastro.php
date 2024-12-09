<?php

require_once("base_dados.php");
require_once("helpers/colaboradores_helper.php");

$form = isset($_POST["nome"]) && isset($_POST["apelido"])  && isset($_POST["login"]) && isset($_POST["nif"]) && isset($_POST["senha"]);

$colaboradores = selectSQL("SELECT * FROM colaboradores");

if($form){
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $nif = intval($_POST["nif"]);
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $existe_login = selectSQLUnico("SELECT * FROM colaboradores WHERE login = '$login'");
    
    if($existe_login){
        echo "<br> Usuário já está cadastrado! ";
    }
    else{
        iduSQL("INSERT INTO colaboradores (nome, apelido, nif, login, senha) VALUE ('$nome','$apelido',$nif,'$login','$senha')");
        echo "Usuário cadastrado com sucesso!";
    }
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

    <h1>Cadastrar Novo Colaborador</h1>

    <div class="caixa">

        <form action="" method="post">

            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome" required autofocus>

            <br><br>

            <label for="apelido">Apelido: </label>
            <input type="text" name="apelido" id="apelido" placeholder="Apelido" required>

            <br><br>

            <label for="nif">NIF: </label>
            <input type="number" name="nif" id="nif" placeholder="NIF" required min="1">

            <br><br>

            <label for="login">Login: </label>
            <input type="text" name="login" id="login" placeholder="Login" required>

            <br><br>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>

            <br><br>

            <input type="submit" value="Cadastrar">
            
        </form>

    </div>

    <br>

    <a href="index.php"><button>Início</button></a>

</body>
</html>