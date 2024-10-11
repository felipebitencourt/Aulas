<?php

require_once("globais.php");

?>

<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 99.1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body class="">

    <header class="container-fluid">

        <div class="row">

            <div class="col-12 p-0">

                <nav class="navbar navbar-expand-lg text-bg-primary">

                    <div class="container-fluid">

                        <a class="navbar-brand text-bg-primary" href="#">Agência de Viagens</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">

                                <li class="nav-item">
                                    <a class="nav-link active text-bg-primary" aria-current="page" href="index.php">Home</a>

                                <li class="nav-item dropdown">

                                    <a class="nav-link dropdown-toggle text-bg-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Viagens</a>

                                    <ul class="dropdown-menu">

                                        <a class="nav-link disabled" aria-disabled="true">Em breve...</a>

                                        <!-- <?php foreach ($filmes as $i => $f): ?>

                                        <li><a class="dropdown-item" href="filme.php?posicao=<?= $i; ?>"> <?= $f["titulo"]; ?> </a></li>

                                    <?php endforeach; ?> -->

                                    </ul>

                                </li>

                                <a class="nav-link active text-bg-primary" aria-current="page" href="index.php">Contactos</a>

                            </ul>

                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light" type="submit">Search</button>
                            </form>

                        </div>

                </nav>

            </div>

        </div>

        <div class="row">

            <div class="col-12 p-0">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">

                        <?php foreach ($carousel as $i => $imagem): ?>

                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?= $i + 1; ?>"></button>

                        <?php endforeach; ?>

                    </div>

                    <div class="carousel-inner">

                        <?php foreach ($carousel as $i => $imagem): ?>

            <!-- Se estiver no primeiro loop ele fará o echo da class active, para que já venha com o primeiro banner e os demais não -->

                            <div class="carousel-item <?= ($i == 0) ? 'active' : ''; ?>">

                                <img src="<?= $imagem["img"]; ?>" class="d-block w-100" alt="...">

                                <div class="carousel-caption d-none d-md-block">

                                    <h5><?= $imagem["titulo"]; ?></h5>
                                    <p><?= $imagem["subtitulo"]; ?></p>

                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                    <div>

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

            </div>

        </div>

    </header>

    <main class="container my-4">

        <div class="row">

            <div class="col-12">

                <h1 class="text-center">Home</h1>

            </div>
            <!-- 
            <div class="col-12 d-flex justify-content-center flex-wrap gap-5 mt-5">

                <?php foreach ($filmes as $i => $f): ?>

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

            </div> -->

        </div>

    </main>

    <footer class="container-fluid">

        <div class="row">

            <div class="col-12 text-bg-primary  p-3 text-center">

                Felipe Bitencourt &copy; <?= date("Y"); ?>

            </div>

        </div>

    </footer>

</body>

</html>