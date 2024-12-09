<?php

require_once("helpers/colaboradores_helper.php");

$produtos = selectSQL("SELECT * FROM loja_php");

$usuario_encontrado = verificarLogado();

if(empty($usuario_encontrado)){
    header("Location: index.php");
    exit();
}

$form = isset($_GET["id"]);

if($form){
    $id = $_GET["id"];
    $produto_selecionado = selectSQLUnico("SELECT * FROM loja_php WHERE id=$id");
}

$form_2 = isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if($form_2){
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $quantidade = $_GET["quantidade"];

    iduSQL("UPDATE loja_php SET nome='$nome', preco=$preco, quantidade=$quantidade WHERE id=$id");

    header("Location: editar_produto.php");
}

?>

    <main class="container-fluid">

        <div class="row">
            
            <div class="col-12 p-0">

                <h1 class="my-5">Editar Produtos</h1>

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
                
                <form class="mt-5">

                    <label for="id">ID do produto: </label>
                    <input type="text" name="id" id="id" placeholder="ID" required autofocus>
                    <br><br>
                    <input type="submit" value="Selecionar">
                
                </form>

            </div>

            <?php if($form): ?>

                <div class="col-12 p-0">

                    <h3 class="my-5">--- Produto escolhido ---</h3>
                    
                    <table class="mt-5">

                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                        </tr>

                        <tr>
                            <td><?= $produto_selecionado["id"]; ?></td>
                            <td><?= $produto_selecionado["nome"]; ?></td>
                            <td><?= $produto_selecionado["preco"]; ?></td>
                            <td><?= $produto_selecionado["quantidade"]; ?></td>
                        </tr>

                    </table>

                </div>            

                <div class="col-12 p- my-5 d-flex justify-content-center">
                    
                    <form action="">

                        <input type="hidden" name="id" value="<?= $id; ?>">

                        <h3>O que deseja editar? </h3>
                        <br>
                        <div>
                            <label for="nome">Nome:</label>
                            <br>
                            <input type="text" name="nome" id="nome" placeholder="Nome" value="<?= $produto_selecionado["nome"]; ?>">
                            <br><br>
                        </div>
                        <div>
                            <label for="preco">Preço:</label>
                            <br>
                            <input type="number" name="preco" placeholder="Preço" value="<?= $produto_selecionado["preco"]; ?>" min="0.01" step="0.01">
                            <br><br>
                        </div>
                        <div>
                            <label for="quantidade">Quantidade:</label>
                            <br>
                            <input type="number" name="quantidade" placeholder="Quantidade" value="<?= $produto_selecionado["quantidade"]; ?>" min="1">
                            <br><br>
                        </div>
                        <div>
                            <input type="submit" value="Alterar">
                        </div>
                    
                    </form>

                </div>

            <?php endif; ?>

        </div>

    </main>

</body>
</html>