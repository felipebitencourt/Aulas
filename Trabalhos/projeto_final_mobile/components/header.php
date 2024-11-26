<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construção e Habitação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" href="public/imagens/icon.png" type="image/png">
    <link rel="stylesheet" href="public/css/fonts.css">
    <link rel="stylesheet" href="public/css/style.css">
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

                                <li class="nav-item pe-3"><a class="nav-link active p-0 pb-3" aria-current="page" href="index.html">Home</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Quem Somos</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Sócios</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Notícias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Destaques</a></li>

                                <li class="nav-item pe-3 dropdown">

                                    <a class="nav-link p-0 pb-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empreendimentos</a>

                                    <ul class="dropdown-menu my-0 border-0 ps-3">
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Canidelo - Vila Nova de Gaia</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Barranha - Sª da Hora Matosinhos</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Contumil - Porto</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Vila do Conde</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Famalicão</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Madalena - Vila Nova de Gaia</a></li>
                                    </ul>

                                </li>

                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Centro de Férias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Contactos</a></li>

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

                                <li class="nav-item pe-3"><a class="nav-link active p-0 pb-3" aria-current="page" href="index.html">Home</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Quem Somos</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Sócios</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Notícias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Destaques</a></li>

                                <li class="nav-item pe-3 dropdown">

                                    <a class="nav-link p-0 pb-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empreendimentos</a>

                                    <ul class="dropdown-menu my-0 border-0 ps-3">
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Canidelo - Vila Nova de Gaia</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Barranha - Sª da Hora Matosinhos</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Contumil - Porto</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Vila do Conde</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Famalicão</a></li>
                                        <li><hr class="dropdown-divider my-1 w-75 m-auto"></li>
                                        <li><a class="nav-link interno font_light ps-3 py-1" href="#">Madalena - Vila Nova de Gaia</a></li>
                                    </ul>

                                </li>

                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Centro de Férias</a></li>
                                <li class="nav-item pe-3"><a class="nav-link p-0 pb-3" href="#">Contactos</a></li>

                            </ul>

                        </div>

                    </div>

                </nav>

            </div>

        </div>

        <div class="row text-center" id="carrossel">

            <div class="col-12 p-0">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner"> <br>

                        <div class="carousel-item active sombra_carousel">
                            <img src="public/imagens/banner_1.png" class="w-100" alt="Banner 1">
                        </div>

                        <div class="carousel-item sombra_carousel">
                            <img src="public/imagens/banner_2.png" class="w-100" alt="Banner 2">
                        </div>

                        <div class="carousel-item sombra_carousel">
                            <img src="public/imagens/banner_3.png" class="w-100" alt="Banner 3">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>