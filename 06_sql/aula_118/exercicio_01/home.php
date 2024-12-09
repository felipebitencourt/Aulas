<?php

require_once("funcoes.php");
verificarLogin();

$usuario_encontrado = $_SESSION["usuario_encontrado"];
$meus_acessos = selectSQL("SELECT * FROM acessos WHERE id_colaborador=$usuario_encontrado[id] ORDER BY id DESC");
$total = count($meus_acessos);

if ($usuario_encontrado["admin"]) {
    // $todos_acessos = selectSQL("SELECT * FROM acessos WHERE id_colaborador!=$usuario_encontrado[id] ORDER BY id DESC");
    $todos_acessos = selectSQL("SELECT * FROM acessos ORDER BY id DESC");
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
            <div class="col-12 text-center h1">Home</div>
        </div>

        <div class="row">
            <div class="col-12 text-center mb-4">
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 border border-danger text-center rounded-5 py-5">

                <p>Bem-vindo(a) <?= $usuario_encontrado["nome"]; ?>.</p>
                <p>Data do último acesso: ( <?= (!empty($meus_acessos[1])) ? $meus_acessos[1]["data"] : "Este é o primeiro acesso"; ?> ).</p>

                <table class="m-auto w-75 mt-4">
                    <tr>
                        <th>Acesso</th>
                        <th>Data</th>
                    </tr>

                    <?php foreach ($meus_acessos as $i => $a): ?>

                        <tr>
                            <td><?= ($total - $i); ?></td>
                            <td><?= $a["data"]; ?></td>
                        </tr>

                    <?php endforeach; ?>

                </table>

            </div>
        </div>

        <?php if ($usuario_encontrado["admin"]): ?>

            <div class="row mt-4 mb-5">
                <div class="col-12 border border-danger text-center rounded-5 py-5">

                    <p>Histório de todos os colaboradores.</p>

                    <table class="m-auto w-75 mt-4">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data</th>
                        </tr>

                        <?php foreach ($todos_acessos as $a): ?>

                            <!-- <?php $colaborador = selectSQLUnico("SELECT nome FROM colaboradores WHERE id=$a[id_colaborador];"); ?> -->

                            <tr>
                                <td><?= $a["id"]; ?></td>
                                <td><?= getNomeColaborador($a["id_colaborador"]); ?></td>
                                <td><?= $a["data"]; ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </table>

                </div>
            </div>

        <?php endif; ?>

    </main>

</body>

</html>