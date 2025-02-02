<main class="container-fluid">

    <div class="row">

        <div class="col-1 mb-md-4 m-auto barra parar"></div>

        <div class="col-12 mb-3 ajuste_centro_ferias">
            
            <h1 class="mt-3 titulo pb-2 pb-md-5">Centro de Férias</h1>

            <img class="img_centro_ferias float-start mb-3 me-4" src="<?= $centro_ferias["imagem"]; ?>" alt="Centro de Férias">

            <?= $centro_ferias["texto"]; ?>
            
        </div>

    </div>

    <div class="row mt-4 mt-md-5 px-5">

        <div class="col-12 text-center d-flex flex-wrap justify-content-center align-items-center gap-md-4 gap-5">

            <?php for($i=1; $i <= 4; $i+=1): ?>

                <div>
                    <img class="imagens_empreendimentos" src="<?= $centro_ferias["imagem_$i"]; ?>" alt="<?= $centro_ferias["imagem_$i"]; ?>">
                </div>

            <?php endfor; ?>

        </div>

    </div>

</main>