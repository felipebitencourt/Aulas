<?php

$form = !empty($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $destaque_especifico = getDestaqueEspecifico($id);
}

getDestaqueEspecifico($id);

?>

<main class="container-fluid">

    <div class="row">

        <div class="col-1 mb-md-4 m-auto barra parar"></div>

        <div class="row">
            <div class="col-12 mb-3 col-md-11 m-auto px-5">
            
                <h1 class="mt-3 titulo">Destaques</h1>
                <h2 class="font_light">
            
                <?php if(!empty($destaque_especifico)): ?>
            
                    <?= $destaque_especifico["titulo"]; ?>
                <?php else: ?>
                    "Destaque" not found!
                <?php endif; ?>
            
                </h2>
            </div>
            <div class="col-12 col-md-11 m-auto px-5">
                <?php if(!empty($destaque_especifico)): ?>
            
                    <?= $destaque_especifico["texto"]; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-12 d-flex justify-content-end col-md-11 m-auto px-5">
            <a href="destaques.php"><button class="voltar">Voltar para Destaques</button></a>
        </div>

    </div>

</main>