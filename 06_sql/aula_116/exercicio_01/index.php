<?php

require_once("base_dados.php");
require_once("helpers/colaboradores_helper.php");
$form = !empty($_POST["login"]) && !empty($_POST["senha"]);

if($form){
  
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if(fazerLogin($login, $senha)){
        header("Location: home.php");
        exit();
    }

}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 116.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria</h1>

    <div class="caixa">

        <form action="" method="post">

            <?php if($form): ?> 
                <p style="color: red;">LOGIN E/OU SENHA INCORRETOS.</p> 
            <?php endif; ?>

            <input type="text" name="login" placeholder="Login" required autofocus>
            
            <br><br>

            <input type="password" name="senha" placeholder="Senha" required>

            <br><br>

            <input type="submit" value="Entrar">

        </form>

    </div>

    <br>

    <a href="novo_cadastro.php"><button>Novo Cadastro</button></a>

</body>
</html>