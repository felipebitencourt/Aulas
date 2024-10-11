<?php

require_once("funcoes.php");
require_once("globais.php");

?>

<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 97.1</title>

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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Filmes
                                </a>

                                <ul class="dropdown-menu">

                                    <?php foreach($filmes as $f): ?>

                                        <li><a class="dropdown-item" href="#"><?= $f["titulo"]; ?></a></li>

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

        <!-- <div class="row">

            <div class="col-12 p-0">

                <div id="carouselExampleCaptions" class="carousel slide">

                Um foreach para estes butões
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                Um foreach para este carousel

                <?php foreach($carousel as $i => $banner): ?>

                    Para o active, o primeiro que deve aparecer:

                    <?= ($i == 0) ? 'active' : ''; ?>

                <?php endforeach; ?>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="imagens/img001.jpg" class="d-block w-100" alt="Imagem 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="imagens/img002.jpg" class="d-block w-100" alt="Imagem 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="imagens/img003.jpg" class="d-block w-100" alt="Imagem 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>

            </div>

        </div> -->

    </header>

    <main class="container my-4">

        <div class="row">

            <div class="col-12">

                <h1 class="text-center">Filmes</h1>
                
            </div>

            <div class="col-12 d-flex justify-content-center flex-wrap gap-5 mt-5">

                <?php foreach($filmes as $f): ?>

                    <div class="card" style="width: 18rem;">

                        <img src="<?= $f["imagem"]; ?>" class="card-img-top" alt="<?= $f["titulo"]; ?>">

                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $f["titulo"]; ?></h5>
                            <p class="card-text">
                                <?= substr($f["texto"], 0, 98); ?>...
                            </p>
                        </div>

                    </div>

                <?php endforeach; ?>

            </div>


        </div>
    
    </main>

    <footer class="text-bg-danger p-3 text-center">

        Felipe Bitencourt &copy; <?= date("Y"); ?>

    </footer>
    
</body>
</html>