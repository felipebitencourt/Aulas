<?php

require_once("helpers/colaboradores_helper.php");
$usuario_encontrado = verificarLogado();

if(empty($usuario_encontrado)){
    header("Location: index.php");
    exit();
}

$produtos = selectSQL("SELECT * FROM loja_php");

?>
    <main class="container-fluid">

        <div class="row mt-5">

            <div class="col-12 p-0">

                <h1>Loja Python, porém em PHP</h1>

                <h3 class="fw-bold mt-5">Lista de Produtos</h3>

                <table class="mt-5">

                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>

                    <?php foreach($produtos as $p): ?>

                        <tr>
                            <td><?= $p["id"]; ?></td>
                            <td><?= $p["nome"]; ?></td>
                            <td><?= $p["preco"]; ?></td>
                            <td><?= $p["quantidade"]; ?></td>
                        </tr>

                    <?php endforeach; ?>

                </table>

            </div>

        </div>

    </main>

</body>
</html>