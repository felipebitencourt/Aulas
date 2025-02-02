<?php

require_once("requisitos.php");
$empreendimentos = getEmpreendimentos();
$contactos = getContactos();
$quem_somos = getQuemSomos();
$centro_ferias = getCentroFerias();
$noticias = getNoticias();
$banner = getBanners($pagina_atual);

if($pagina_atual == "quem_somos"){$titulo = $quem_somos["titulo"];}
else if($pagina_atual == "socios"){$titulo = "Sócios";}
else if($pagina_atual == "noticias"){$titulo = "Notícias";}
else if($pagina_atual == "contactos"){$titulo = "Contactos";}
else if($pagina_atual == "empreendimentos"){$titulo = "Empreendimentos";}
else if($pagina_atual == "centro_ferias"){$titulo = "Centro de Férias";}
elseif($pagina_atual == "destaques" || $pagina_atual == "destaque_especifico"){$titulo = "Destaques";}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construção e Habitação | <?= $titulo; ?> </title>

    <link rel="icon" href="public/imagens/icon.png" type="image/png">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="public/css/fonts.css">
    <link rel="stylesheet" href="public/css/style.css">

    <!-- JS LOCAL -->
    <script src="public/js/main.js" defer></script>

</head>
<body class="text-center">

    <header class="container-fluid p-0">
        <!-- --------------------------------------- NAVBAR DESKTOP --------------------------------------- -->
        <div class="row d-none d-lg-flex text-center mt-lg-5 py-2">

            <div class="col-12 p-0 d-lg-flex justify-content-lg-evenly ajuste_nav">

                <nav class="navbar navbar-expand-lg">

                    <div class="container-fluid text-uppercase">

                        <img class="me-xl-5 mb-0 mb-sm-5" id="logo" src="public/imagens/logo.png" alt="Logo">

                        <button class="navbar-toggler mb-0 mb-sm-5 pe-5 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-lg-0 navbar_header align-items-start mt-sm-3">

                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "home") ? "active" : ""; ?> p-0 pb-3" aria-current="page" href="index.php">Home</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "quem_somos") ? "active" : ""; ?> p-0 pb-3" href="quem_somos.php">Quem Somos</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "socios") ? "active" : ""; ?> p-0 pb-3" href="socios.php">Sócios</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "noticias") ? "active" : ""; ?> p-0 pb-3" href="noticias.php">Notícias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "destaques" || $pagina_atual == "destaque_especifico") ? "active" : ""; ?> p-0 pb-3" href="destaques.php">Destaques</a></li>

                                <li class="nav-item pe-3 dropdown">

                                    <a class="nav-link p-0 pb-3 <?= ($pagina_atual == "empreendimentos") ? "active" : ""; ?>" id="menu_empreendimentos" href="empreendimentos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empreendimentos</a>

                                    <ul class="dropdown-menu my-0 border-0">
                                        
                                        <?php foreach($empreendimentos as $i => $e): ?>

                                            <li><a class="nav-link interno font_light px-4 py-1" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a></li>
                                            <li><hr class="dropdown-divider my-1 w-100 m-auto <?= ($i == count($empreendimentos) - 1) ? "d-none" : ""; ?>"></li>

                                        <?php endforeach; ?>

                                    </ul>

                                </li>

                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "centro_ferias") ? "active" : ""; ?> p-0 pb-3" href="centro_ferias.php">Centro de Férias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "contactos") ? "active" : ""; ?> p-0 pb-3" href="contactos.php">Contactos</a></li>

                            </ul>

                        </div>

                    </div>

                </nav>

            </div>

        </div>
        <!-- --------------------------------------- NAVBAR MOBILE --------------------------------------- -->
        <div class="row d-flex d-lg-none text-center mt-lg-5 py-2">

            <div class="col-12 p-0 d-lg-flex justify-content-lg-evenly ajuste_nav">

                <nav class="navbar navbar-expand-lg">

                    <div class="container-fluid text-uppercase">

                        <img class="me-xl-5 mb-0 mb-sm-5" id="logo" src="public/imagens/logo.png" alt="Logo">

                        <button class="navbar-toggler mb-0 mb-sm-5 pe-5 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-lg-0 navbar_header align-items-start mt-sm-3">

                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "home") ? "active" : ""; ?> p-0 pb-3" aria-current="page" href="index.php">Home</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "quem_somos") ? "active" : ""; ?> p-0 pb-3" href="quem_somos.php">Quem Somos</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "socios") ? "active" : ""; ?> p-0 pb-3" href="socios.php">Sócios</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "noticias") ? "active" : ""; ?> p-0 pb-3" href="noticias.php">Notícias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "destaques" || $pagina_atual == "destaque_especifico") ? "active" : ""; ?> p-0 pb-3" href="destaques.php">Destaques</a></li>

                                <li class="nav-item pe-3 dropdown">

                                    <a class="nav-link p-0 pb-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empreendimentos</a>

                                    <ul class="dropdown-menu my-0 border-0 ps-3">
                                        
                                        <?php foreach($empreendimentos as $i => $e): ?>

                                            <li><a class="nav-link interno font_light ps-3 py-1" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a></li>
                                            <li><hr class="dropdown-divider my-1 w-75 m-auto <?= ($i == count($empreendimentos) - 1) ? "d-none" : ""; ?>"></li>

                                        <?php endforeach; ?>

                                    </ul>                                    

                                </li>

                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "centro_ferias") ? "active" : ""; ?> p-0 pb-3" href="centro_ferias.php">Centro de Férias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "contactos") ? "active" : ""; ?> p-0 pb-3" href="contactos.php">Contactos</a></li>

                            </ul>

                        </div>

                    </div>

                </nav>

            </div>

        </div>

        <div class="row">

            <div class="col-12 p-0">

                <div class="banner w-100"><img src="<?= $banner["imagem"]; ?>" alt="<?= $banner["imagem"]; ?>"></div>

            </div>

        </div>

    </header>