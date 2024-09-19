<?php

$form = isset($_GET["perfil"]) && isset($_GET["perfil_antes"]) && isset($_GET["perfil_depois"]) &&isset($_GET["foto"]);

$foto = "perfil.jpg";

if($form){
    $perfil = $_GET["perfil"];
    $sobre = $_GET["sobre"];
    $perfil_antes = intval($_GET["perfil_antes"]);
    $perfil_depois = intval($_GET["perfil_depois"]);
    if(isset($_GET["foto"]) && $_GET["foto"] != ""){
        $foto = $_GET["foto"];
    }
}
else{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 90.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Perfis</h1>

    <?php if($form): ?>

        <?php for($i = 1; $i<=$perfil_antes; $i += 1): ?>

            <div class="perfis">

                <img src="perfil.jpg" alt="Perfil">
                
                <div class="texto">
                    <h2>Perfil Antes <?= $i; ?> </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorum eum beatae. Voluptatum nihil iste recusandae adipisci hic totam sed delectus ratione! Natus tenetur consequatur earum. Voluptatem atque tenetur odit?</p>
                </div>

            </div>

        <?php endfor; ?>

        <div class="perfil_atual perfis">

            <img src="<?= $foto; ?>" alt="Perfil">
            
            <div class="texto">
                <h2> <?= $perfil; ?> </h2>
                <p> <?= $sobre; ?> </p>
            </div>

        </div>

        <?php for($i = 1; $i<=$perfil_depois; $i += 1): ?>

            <div class="perfis">

                <img src="perfil.jpg" alt="Perfil">
                
                <div class="texto">
                    <h2>Perfil Depois <?= $i; ?> </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorum eum beatae. Voluptatum nihil iste recusandae adipisci hic totam sed delectus ratione! Natus tenetur consequatur earum. Voluptatem atque tenetur odit?</p>
                </div>

            </div>

        <?php endfor; ?>

        <br>
        <a href="index.php"><button>Voltar</button></a>

    <?php endif; ?>

</body>
</html>