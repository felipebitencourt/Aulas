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

        // iduSQL("DELETE FROM loja_php WHERE id=$id");


?>
    <main class="container-fluid">

        <div class="row">
            
            <div class="col-12 p-0">

                <h1 class="my-5">Apagar Produtos</h1>

                <table class="my-5">

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
                
                <form>

                    <label for="id">ID do produto: </label>
                    <input type="text" name="id" id="id" placeholder="ID" required autofocus>
                    <br><br>
                    <input type="submit" value="Selecionar">
                
                </form>

            </div>
                
            <?php if($form): ?>

                <div class="col-12 p-0">

                    <h3 class="my-5">Tem certeza que deseja apagar o produto escolhido?</h3>
                    
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

                <div class="col-12 p- my-5">
                    
                    <form>

                        <button name="deletar">SIM</button>
                        <?php if(isset($_GET["deletar"])){$deletar = $produto_selecionado["id"]; iduSQL("DELETE FROM loja_php WHERE id=$deletar");}  ?>
                        <a href="apagar_produto.php"><button>NÃO</button></a>


                        <!-- <label for="sim">SIM</label>
                        <input type="radio" name="deletar" id="sim" value="sim" required>
                        <br>
                        <label for="nao">NÃO</label>
                        <input type="radio" name="deletar" id="nao" value="nao" required checked>

                        <br><br>

                        <input type="submit" value="Enviar"> -->
                    
                    </form>

                </div>

            <?php endif; ?>

        </div>

    </main>

</body>
</html>