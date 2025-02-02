<main class="container-fluid">

    <div class="row">

        <div class="col-1 mb-md-4 m-auto barra"></div>

        <div class="col-12 mb-3 ajuste_bem_vindo">
            
            <h1 class="mt-3 titulo pb-2 pb-md-5">Bem-vindo à <br> Cooperativa de Construção e Habitação Tripeira</h1>

            <p class="pt-2 text-start texto"><?= substr(strip_tags($quem_somos["texto"]), 0, 400); ?>...</p>
    
            <a href="quem_somos.php"><button class="mt-4 mt-md-5 ver_mais modelo_1">VER MAIS</button></a>

        </div>

        <div class="col-1 mt-4 mt-md-5 mb-md-4 m-auto barra"></div>

    </div>

    <div class="row">
        <h1 class="col-12 mt-3 mt-md-4 titulo">Destaques</h1>
    </div>

    <div class="row p-0 mt-4 m-md-5 d-flex flex-wrap justify-content-center row-gap-5 column-gap-4">

        <?php foreach($destaques as $d): ?>

            <div class="col-3 p-0 dimensao_card">
        
                <img src="<?= $d["imagem"]; ?>" class="w-100 img_card p-0" alt="<?= $d["imagem"]; ?>">
                
                <div class="container-fluid">

                    <div class="row card_interno border border-black text-center">
                        
                        <div class="col-12 p-0 text-start">
                            <h1 class="titulo_card m-0"><?= $d["titulo"]; ?></h1>
                        </div>

                        <div class="col-12 p-0 m-0">
                            <p class="texto texto_card p-0 m-0 text-start">
                                <?= substr(strip_tags($d["texto"]), 0, 85); ?>...
                            </p>
                        </div>
                        
                        <a href="destaque_especifico.php?id=<?= $d["id"]; ?>"><button class="ver_mais modelo_2">VER MAIS</button></a>

                    </div>
                    
                </div>

            </div>

        <?php endforeach; ?>
    
    </div>

</main>