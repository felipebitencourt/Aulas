<?php

require_once("../requisitos.php");

$form = !empty($_POST["login"]) && !empty($_POST["password"]);

if($form){

    if(logar($_POST["login"], $_POST["password"])){
        header("Location: home.php");
        exit();
    }

}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="public/css/style.css">
    
</head>
<body>

    <main class="container-fluid">

        <div class="row">

            <div class="col-auto m-auto mt-5 border border-info rounded-2 text-center p-5">

                <form action="" method="post">
                    
                    <?php if($form): ?>

                        <h5 style="color: red;">Login/Senha Incorreto!</h5 style="color: red;">

                    <?php endif; ?>


                    <input type="text" name="login" class="text-center" placeholder="Login" autofocus>
                    <br><br>
                    <input type="password" name="password"  class="text-center" placeholder="Senha">
                    <br><br>
                    <button class="btn btn-outline-info">Acessar</button>

                </form>

            </div>

        </div>

    </main>
    
</body>
</html>