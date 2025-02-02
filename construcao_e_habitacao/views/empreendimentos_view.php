<?php

$form = !empty($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $empreendimentos = getEmpreendimentosEspecifico($id);
}

getEmpreendimentosEspecifico($id);

?>

<main class="container-fluid">

    <div class="row p-0">

        <div class="col-1 mb-md-4 m-auto barra parar"></div>

        <div class="row">

            <div class="col-12 mb-3 col-md-11 m-auto px-5">
            
                <h1 class="mt-3 titulo">Empreendimentos</h1>

                <h2 class="font_light">
            
                    <?php if(!empty($empreendimentos)): ?>
                
                        <?= $empreendimentos["titulo"]; ?>
                        
                    <?php else: ?>
                        "Empreendimento" not found!
                    <?php endif; ?>
                
                </h2>

            </div>
            
            <div class="col-12 col-md-11 m-auto mt-4 ajuste_empreendimentos">

                <?php if(!empty($empreendimentos)): ?>
            
                    <?= $empreendimentos["texto"]; ?>
                    
                <?php endif; ?>

            </div>

        </div>

    </div>

    <div class="row mt-4 mt-md-5 px-5">

        <div class="col-12 text-center d-flex flex-wrap justify-content-center align-items-center gap-md-4 gap-5">

            <?php for($i=1; $i <= 4; $i+=1): ?>

                <div>
                    <img class="imagens_empreendimentos" src="<?= $empreendimentos["imagem_$i"]; ?>" alt="<?= $empreendimentos["imagem_$i"]; ?>">
                </div>

            <?php endfor; ?>

        </div>

    </div>

</main>

