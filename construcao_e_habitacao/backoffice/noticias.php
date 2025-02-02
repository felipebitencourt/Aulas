<?php

require_once("../requisitos.php");

if(!verificarLogin()){
    header("Location: index.php");
    exit();
}

$noticias = getNoticias();

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
                                        <a class="nav-link active" href="noticias.php">Notícias</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="destaques.php">Destaques</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="empreendimentos.php">Empreendimentos</a>
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

                <h1>Notícias</h1>
            
            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <button class="btn btn-outline-success my-3"><a class="text-decoration-none text-white" href="nova_noticia.php">Nova Notícia</a></button>
            
            </div>

        </div>

        <div class="row mt-3">

            <div class="col-12">

                <table>

                    <tr>
                        <th>Título</th>
                        <th>Imagem</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>
                    
                    <?php foreach($noticias as $n): ?>

                        <tr>
                            <td><?= $n["titulo"]; ?></td>
                            <td><img src="<?= $n["imagem"]; ?>" alt="<?= $n["imagem"]; ?>" width="200"></td>
                            <td><?= substr(strip_tags($n["texto"]), 0, 100); ?></td>
                            <td>
                                <button class="btn btn-outline-warning mb-2"><a class="text-decoration-none text-white" href="noticias_editar.php?editar=<?= $n["id"] ;?>">Editar</a></button>
                                <button class="btn btn-outline-danger"><a class="text-decoration-none text-white" href="noticias_apagar.php?apagar=<?= $n["id"] ;?>">Apagar</a></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </table>

            </div>

        </div>

    </main>
    
</body>
</html>