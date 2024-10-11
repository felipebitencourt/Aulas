<?php

require_once("funcoes.php");
require_once("globais.php");

?>

<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 100.1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style.css">

</head>
<body class="">

    <header class="container-fluid">

        <div class="row">

            <div class="col-12 p-0">

                <nav class="navbar navbar-expand-lg text-bg-danger">

                    <div class="container-fluid">
                        <a class="navbar-brand text-bg-danger" href="#">FILMES</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">

                            <li class="nav-item">
                            <a class="nav-link active text-bg-danger" aria-current="page" href="index.php">Home</a>
                            
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle text-bg-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Filmes
                                </a>

                                <ul class="dropdown-menu">

                                    <?php foreach($filmes as $i => $f): ?>

                                        <li><a class="dropdown-item" href="filme.php?posicao=<?= $i; ?>"> <?= $f["titulo"]; ?> </a></li>

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

            <div class="col-12">

                <h1 class="text-center">Filmes</h1>
                
            </div>

            <div class="col-12 d-flex justify-content-center flex-wrap gap-5 mt-5">

                <?php foreach($filmes as $i => $f): ?>

                    <a href="filme.php?posicao=<?= $i; ?>" class="card text-decoration-none" style="width: 18rem;">

                        <img src="<?= $f["imagem"]; ?>" class="card-img-top" alt="<?= $f["titulo"]; ?>">

                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $f["titulo"]; ?></h5>
                            <p class="card-text">
                                <?= substr($f["texto"], 0, 98); ?>...
                            </p>
                        </div>

                    </a>

                <?php endforeach; ?>

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