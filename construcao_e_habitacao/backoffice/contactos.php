<?php

require_once("../requisitos.php");

if(!verificarLogin()){
    header("Location: index.php");
    exit();
}

$form = !empty($_GET["morada"]) && !empty($_GET["telefone"]) && !empty($_GET["fax"]) && !empty($_GET["email"]) && !empty($_GET["facebook"]);

if($form){
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];
    $fax = $_GET["fax"];
    $facebook = $_GET["facebook"];
    iduSQL("UPDATE contactos SET morada='$morada', telefone='$telefone', fax='$fax', email='$email', facebook='$facebook'");
}

$contactos = getContactos();

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
                                        <a class="nav-link" href="empreendimentos.php">Empreendimentos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" href="contactos.php">Contactos</a>
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

                    <h1>EDITAR</h1>
                    <h4>Contactos</h4>
                
                </div>

            </div>

        <form class="row">

            <div class="col-12 mt-5">

                <label for="morada">Morada: </label>
                <br>
                <input type="text" name="morada" id="morada" required value="<?= $contactos["morada"]; ?>">
                <br><br>
                <label for="telefone">Telefone: </label>
                <br>
                <input type="text" name="telefone" id="telefone" required value="<?= $contactos["telefone"]; ?>">
                <br><br>
                <label for="fax">Fax: </label>
                <br>
                <input type="text" name="fax" id="fax" required value="<?= $contactos["fax"]; ?>">
                <br><br>
                <label for="email">E-mail: </label>
                <br>
                <input type="email" name="email" id="email" required value="<?= $contactos["email"]; ?>">
                <br><br>
                <label for="facebook">Link do Facebook: </label>
                <br>
                <input type="url" name="facebook" id="facebook" required value="<?= $contactos["facebook"]; ?>">
            
            </div>

            <div class="col-12 mt-5">

                <button class="btn btn-outline-success">Salvar</button>

            </div>

        </form>

    </main>
    
</body>
</html>