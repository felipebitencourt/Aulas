<?php

require_once("base_dados.php");

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);

if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $usuario_encontrado = selectSQLUnico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");

    if(!empty($usuario_encontrado)){
        session_start();
        $_SESSION["usuario_encontrado"] = $usuario_encontrado;
        header("Location: home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 114.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria</h1>

    <div class="caixa">

        <form action="" method="post">

            <?php if($form): ?> <p style="color:'red'">LOGIN OU SENHA INCORRETOS.</p><?php endif; ?>

            <input type="text" name="login" placeholder="Login" required>

            <br><br>

            <input type="password" name="senha" placeholder="Senha" required>

            <br><br>

            <input type="submit" value="Enviar">

            
        </form>

    </div>
  
</body>
</html>