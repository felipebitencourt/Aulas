<?php

require_once("funcoes.php");

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if ($form) {
    fazerLogin($_POST["login"], $_POST["senha"]);
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
            <div class="col-12 text-center h1">Index</div>
        </div>
        <div class="row">
            <div class="col-6 m-auto border border-danger text-center rounded-5 py-5">
                <form action="" method="post">

                    <?php if ($form): ?> <p class="text-danger">Login ou senha incorreto</p> <?php endif; ?>

                    <input type="text" name="login" placeholder="Login" required autofocus>
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <br><br>
                    <input type="submit" value="Entrar" class="btn btn-danger">
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="novo_colaborador.php">
                    <button class="btn btn-danger">Criar novo<br>Colaborador</button>
                </a>
            </div>
        </div>
    </main>

</body>

</html>