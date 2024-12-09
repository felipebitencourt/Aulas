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
    <main class="container-fluid">

        <div class="row mt-5">

            <div class="col-12 p-0">

                <h1>Loja Python, porém em PHP</h1>

                    <form action="" method="post" class="mt-5">

                        <?php if($form): ?>
                            <p style="color: red;">LOGIN E/OU SENHA INCORRETOS.</p>
                        <?php endif; ?>

                        <input type="text" name="login" placeholder="Login" required autofocus>
                
                        <br><br>
                        <input type="password" name="senha" placeholder="Senha" required>
                        <br><br>
                        <input type="submit" value="Entrar">
                        
                    </form>

                <br>
                
                <a href="novo_cadastro.php"><button>Novo Cadastro</button></a>

            </div>

        </div>

    </main>

</body>
</html>