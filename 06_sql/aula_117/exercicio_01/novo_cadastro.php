<?php

require_once("base_dados.php");
require_once("helpers/colaboradores_helper.php");

$form = !empty($_POST["nome"]) && !empty($_POST["apelido"])  && !empty($_POST["login"]) && !empty($_POST["nif"]) && !empty($_POST["senha"]);

$colaboradores = selectSQL("SELECT * FROM colaboradores");

if($form){
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $nif = $_POST["nif"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $existe_login = selectSQLUnico("SELECT id FROM colaboradores WHERE login = '$login'");
    
    if($existe_login){
        header("Location: novo_cadastro.php?nome=$nome&error=true");
    }
    else{
        iduSQL("INSERT INTO colaboradores (nome, apelido, nif, login, senha) VALUE ('$nome','$apelido',$nif,'$login','$senha')");
        header("Location: novo_cadastro.php?nome=$nome");
    }
}

$form_2 = !empty($_GET["nome"]);
if($form_2){$nome = $_GET["nome"];}

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

    <h1>Cadastrar Novo Colaborador</h1>

    <div class="caixa">

        <form action="" method="post">

            <input type="text" name="nome" id="nome" placeholder="Nome" required autofocus>
            <br><br>
            <input type="text" name="apelido" id="apelido" placeholder="Apelido" required>
            <br><br>
            <input type="text" name="nif" id="nif" placeholder="NIF" required min="1">
            <br><br>
            <input type="text" name="login" id="login" placeholder="Login" required>
            <br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <br><br>
            <input type="submit" value="Cadastrar">
            
        </form>

        <br>

        <?php if($form_2): ?>

            <?php if(empty($_GET["error"])): ?>

                <h3 style="color: darkblue;" >Nome: ( <?= $nome; ?> ) cadastrado com sucesso!</h3>

            <?php else: ?>

                <h3 style="color: brown;">Login já existente.</h3>

            <?php endif; ?>

        <?php endif; ?>

    </div>

    <br>

    <a href="index.php"><button>Início</button></a>

</body>
</html>