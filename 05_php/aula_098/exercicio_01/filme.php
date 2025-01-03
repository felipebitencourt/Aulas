<?php

require_once("globais.php");

$form = isset($_GET["posicao"]);

$pagina_atual = "filme";

if($form){
    $posicao = intval($_GET["posicao"]);
    $filme_pedido = $filmes[$posicao];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 98.1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style.css">

</head>
<body class="">

    <header class="container-fluid">

        <div class="row">

            <div class="col-12 p-0">

                <nav class="navbar navbar-expand-lg text-bg-danger navbar-dark">

                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">FILMES</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">

                            <li class="nav-item">
                            <a class="nav-link <?= ($pagina_atual == "index") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                            
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle <?= ($pagina_atual == "filme") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Filmes
                                </a>

                                <ul class="dropdown-menu">

                                    <?php foreach($filmes as $i => $f): ?>

                                        <li><a class="dropdown-item" href="filme.php?posicao=<?= $i; ?>"><?= $f["titulo"]; ?></a></li>

                                    <?php endforeach; ?>
                                    
                                </ul>

                            </li>

                        </ul>

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>

                    </div>

                </nav>
            
            </div>

        </div>
        
    </header>

    <main class="container my-4">

        <div class="row">

            <div class="col-12 text-center">

                <h1><?= $filme_pedido["titulo"]; ?></h1>
                
            </div>

        </div>

        <div class="row mt-3">

            <div class="col-12">

                <img class="float-start me-3" src="<?= $filme_pedido["imagem"]; ?>" alt="<?= $filme_pedido["titulo"]; ?>">
                
                <p class="text-justify">
                    <?= $filme_pedido["texto"]; ?>
                </p>

                <div class="text-center"><a href="index.php"><button type="button" class="btn btn-outline-success">Voltar</button></a></div>
                    
            </div>

        </div>
    
    </main>

    <footer class="container-fluid">

        <div class="row">

            <div class="col-12 text-bg-danger p-3 text-center">

                Felipe Bitencourt &copy; <?= date("Y"); ?>

            </div>

        </div>

    </footer>
    
</body>
</html>