<?php

require_once("base_dados.php");
require_once("helpers/colaboradores_helper.php");
$usuario_encontrado = verificarLogado();

if(empty($usuario_encontrado)){
    header("Location: index.php");
    exit();
}

$produtos = selectSQL("SELECT * FROM loja_php");

$form = isset($_GET["nome"]) && isset($_GET["preco"]) && isset($_GET["quantidade"]);

if($form){
    $nome = $_GET["nome"];
    $preco = floatval($_GET["preco"]);
    $quantidade = intval($_GET["quantidade"]);

    $registrar_produto = iduSQL("INSERT INTO loja_php (nome, preco, quantidade) VALUE ('$nome', $preco, $quantidade)");
}

?>

    <main class="container-fluid">

        <div class="row">
            
            <div class="col-12 p-0">

                <h1 class="my-5">Registrar Produtos</h1>
                
                <form action="">

                    <label for="nome">Nome do produto: </label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" required autofocus>
                    <br><br>
                    <label for="preco">Preço do produto: </label>
                    <input type="number" name="preco" id="preco" placeholder="Preço" required min="0.01" step="0.01">
                    <br><br>
                    <label for="quantidade">Quantidade do produto: </label>
                    <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade" required min="1">
                    <br><br>
                    <input type="submit" value="Registrar">
                
                </form>

                <br><br>

                <?php if($form): ?>

                    <h3 style="color: white;" >Produto ( <?= $nome; ?> ) registrado com sucesso!</h3>

                <?php endif; ?>

            </div>

        </div>

    </main>

</body>
</html>