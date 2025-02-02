<?php

$pagina = 1;

$total_paginas = getTotalNoticiasPaginas();
$form = !empty($_GET["pagina"]);

if($form){
    $pagina = intval($_GET["pagina"]);

    if($pagina < 1){$pagina = 1;}
    elseif($pagina > $total_paginas){$pagina = $total_paginas;}
}

$noticias = getNoticiasPorPaginas($pagina);

?>

<main class="container-fluid">

    <div class="row">

        <div class="col-1 mb-md-4 m-auto barra parar"></div>

    </div>

    <div class="row">
        <h1 class="col-12 mt-3 mt-md-4 titulo">Notícias</h1>
    </div>

    <div class="row mt-2 mt-md-4 py-3">

        <div class="col-12 col-md-11 m-auto px-md-5 d-flex justify-content-center flex-wrap column-gap-4 row-gap-5">

            <?php foreach($noticias as $n): ?>

                <div class="card_grande d-none d-md-block">
            
                    <img src="<?= $n["imagem"]; ?>" class="w-100 p-0" alt="<?= $n["imagem"]; ?>">
            
                    <div class="container-fluid">
                        <div class="row border border-black text-center conteudo">
            
                            <div class="col-12 p-0 text-start">
                                <h1 class="titulo_card_maior m-0"><?= $n["titulo"]; ?></h1>
                            </div>
                            <div class="col-12 py-3 p-0 m-0">
                                <p class="texto texto_card p-0 m-0 text-start">
                                    <?= substr(strip_tags($n["texto"]), 0, 400); ?>...
                                </p>
                            </div>

                        </div>
            
                    </div>
                    
                </div>

                <div class="col-3 p-0 dimensao_card d-block d-md-none">
        
                    <img src="<?= $n["imagem"]; ?>" class="w-100 img_card p-0" alt="<?= $n["imagem"]; ?>">
                    
                    <div class="container-fluid">

                        <div class="row card_interno border border-black text-center">
                            
                            <div class="col-12 p-0 text-start">
                                <h1 class="titulo_card m-0"><?= $n["titulo"]; ?></h1>
                            </div>

                            <div class="col-12 p-0 m-0">
                                <p class="texto texto_card p-0 m-0 text-start">
                                    <?= substr(strip_tags($n["texto"]), 0, 85); ?>...
                                </p>
                            </div>

                        </div>
                    
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    
    </div>

    <div class="row mt-4 mt-md-5">

        <div class="col-12 text-center d-flex justify-content-center align-items-center gap-2 buttons_paginas">´

            <a href="noticias.php?pagina=<?= $pagina - 1; ?>"><span class="setas">&lt;</span></a>

            <?php for($i = 1; $i <= $total_paginas; $i += 1): ?>

                <a href="noticias.php?pagina=<?= $i; ?>" class="<?= ($pagina == $i) ? "active" : ""; ?>"><?= $i; ?></a>

            <?php endfor; ?>

            <a href="noticias.php?pagina=<?= $pagina + 1; ?>"><span class="setas">&gt;</span></a>

        </div>

    </div>

</main>