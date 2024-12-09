<?php

require_once("base_dados.php");

$form = !empty($_POST["nome"]) && !empty($_POST["apelido"]) && !empty($_POST["nif"]) && !empty($_POST["login"]) && !empty($_POST["senha"]);
if ($form) {
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $nif = $_POST["nif"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $resultado = selectSQLUnico("SELECT login FROM colaboradores WHERE login='$login'");
    if (empty($resultado)) {
        iduSQL("INSERT INTO colaboradores (nome, apelido, nif, login, senha) VALUES ('$nome', '$apelido', '$nif', '$login', '$senha')");
        header("Location: novo_colaborador.php?estado=sucesso");
    } else {
        header("Location: novo_colaborador.php?estado=erro");
    }
}

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 118.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="bg-dark text-light">

    <main class="container">
        <div class="row">
            <div class="col-12 text-center h1">Novo Colaborador</div>
        </div>
        <div class="row">
            <div class="col-8 m-auto border border-danger text-center rounded-5 py-5">
                <form action="" method="post">

                    <?php if (!empty($_GET["estado"]) && $_GET["estado"] == "sucesso"): ?>

                        <p class="text-success">Colaborador registado com sucesso!</p>

                    <?php endif; ?>

                    <?php if (!empty($_GET["estado"]) && $_GET["estado"] == "erro"): ?>

                        <p class="text-danger">Este login já está a ser usado, tente outro</p>

                    <?php endif; ?>

                    <input type="text" name="nome" placeholder="Nome" required autofocus>
                    <input type="text" name="apelido" placeholder="Apelido" required>
                    <br><br>
                    <input type="text" name="nif" placeholder="NIF" required>
                    <br><br>
                    <input type="text" name="login" placeholder="Login" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <br><br>
                    <input type="submit" value="Entrar" class="btn btn-danger">

                </form>
            </div>
        </div>
    </main>

</body>

</html>