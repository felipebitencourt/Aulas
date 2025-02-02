<?php

require_once("../requisitos.php");

if(!verificarLogin()){
    header("Location: index.php");
    exit();
}

$form = !empty($_GET["editar"]);

if($form){

    $id =  $_GET["editar"];
    $empreendimento_especifico = selectSQLUnico("SELECT * FROM empreendimentos WHERE id=$id");
    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["imagem_1"]) && !empty($_GET["imagem_2"]) && !empty($_GET["imagem_3"]) && !empty($_GET["imagem_4"]) && !empty($_GET["texto"]);

    if($form_2){
        $titulo = $_GET["titulo"];
        $imagem_1 = $_GET["imagem_1"];
        $imagem_2 = $_GET["imagem_2"];
        $imagem_3 = $_GET["imagem_3"];
        $imagem_4 = $_GET["imagem_4"];
        $texto = $_GET["texto"];
    
        iduSQL("UPDATE empreendimentos SET titulo='$titulo', texto='$texto', imagem_1='$imagem_1', imagem_2='$imagem_2', imagem_3='$imagem_3', imagem_4='$imagem_4' WHERE id=$id");
        header("Location: empreendimentos.php");
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
    
    <!-- EDITOR DE TEXTO -->
    <script src="https://cdn.tiny.cloud/1/5z7av92t5br6bsn1ajdi3rum9s2wwjxjlu8och48b46zfa4v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>

    <header class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <nav class="navbar navbar-expand-lg bg-info">

                    <div class="container-fluid">

                        <a class="navbar-brand" href="home.php">Backoffice</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                                    </li>

                                    <li class="nav-item dropdown">

                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Menu Simples
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="menu_simples.php?pagina=quem_somos">Quem Somos</a></li>
                                            <li><a class="dropdown-item" href="menu_simples.php?pagina=socios">Sócios</a></li>
                                            <li><a class="dropdown-item" href="menu_simples.php?pagina=centro_ferias">Centro de Férias</a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="noticias.php">Notícias</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="destaques.php">Destaques</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" href="empreendimentos.php">Empreendimentos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="contactos.php">Contactos</a>
                                    </li>

                                </ul>

                                <button class="btn btn-outline-dark"><a class="nav-link" href="logout.php">Logout</a></button>
                                
                            </div>

                    </div>
                    
                </nav>

            </div>

        </div>

    </header>

    <main class="container text-center py-5">

        <div class="row">

            <div class="col-12">

                <h1>Editar Empreendimento</h1>
                <h4><?= $empreendimento_especifico["titulo"]; ?></h4>
            
            </div>

        </div>

        <form class="row">

            <input type="hidden" name="editar" value="<?= $id; ?>">

            <div class="col-12 my-3">

                <label for="titulo">Título: </label>
                <input type="text" name="titulo" id="titulo" value="<?= $empreendimento_especifico["titulo"]; ?>">

            </div>

            <?php for($i=1; $i <= 4; $i+=1): ?>

                <div class="col-12">

                    <label for="imagem_<?=$i;?>">Imagem <?=$i;?>: </label>
                    <input type="text" name="imagem_<?=$i;?>" id="imagem_<?=$i;?>" value="<?= $empreendimento_especifico["imagem_$i"]; ?>">
                    <button class="btn btn-outline-warning my-3"><a class="text-decoration-none text-black" href="../tinyfilemanager/tinyfilemanager.php" target="_blank">Gestor de Ficheiros</a></button>

                </div>

            <?php endfor; ?>

            <div class="col-12 mt-3">

                <label for="texto">Texto: </label>
                <textarea name="texto" id="texto" rows="25" cols="150"><?= $empreendimento_especifico["texto"]; ?></textarea>

                <script>
                    tinymce.init({
                    selector: '#texto'
                    });
                </script>
            
            </div>

            <div class="col-12 mt-3">

                <button class="btn btn-outline-success">Salvar</button>
                
            </div>

        </form>

    </main>
    
</body>
</html>