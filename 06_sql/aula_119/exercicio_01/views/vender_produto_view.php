<?php

require_once("helpers/colaboradores_helper.php");

$produtos = selectSQL("SELECT * FROM loja_php");

$usuario_encontrado = verificarLogado();

if(empty($usuario_encontrado)){
    header("Location: index.php");
    exit();
}

?>

    <main class="container-fluid">

        <div class="row">
            
            <div class="col-12 p-0">

                <h1 class="my-5">Vender Produtos</h1>

                Table dos produtos existentes
                
                <form action="">

                    <label for="id">ID do produto: </label>
                    <input type="text" name="id" id="id" placeholder="ID" required autofocus>
                    <br><br>
                    <input type="submit" value="Selecionar">
                
                </form>

            </div>

            <div class="col-12 p-0">

                <h3 class="my-5">--- Produto escolhido ---</h3>
                
                <table>

                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Papel</td>
                        <td>0.99 €</td>
                        <td>11</td>
                    </tr>

                </table>

            </div>

            <div class="col-12 p-0 my-5">

                <form action="">
                
                    <label class="fs-4" for="vender">Quantidade que será vendida: </label>
                    <input type="number" name="vender" id="vender" min="1" required placeholder="Quantidade">
                    <br><br>
                    <input type="submit" value="Vender">
                
                </form>

                Mostrar a conta do produto (valor dele) x (quantidade vendida) = total

                <br><br>

                <a href="index.php"><button>Voltar ao HOME</button></a>

            </div>

        </div>

    </main>

</body>
</html>