
    <main class="container my-4">

        <div class="row">

            <div class="col-12 text-center">

                <h1><?= $filme_pedido["titulo"]; ?></h1>
                
            </div>

        </div>

        <div class="row mt-3">

            <div class="col-12">

                <img class="float-start me-3" src="<?= $filme_pedido["imagem"]; ?>" alt="<?= $filme_pedido["titulo"]; ?>">
                
                <p class="text-justify">
                    <?= $filme_pedido["texto"]; ?>
                </p>

                <div class="text-center"><a href="index.php"><button type="button" class="btn btn-outline-success">Voltar</button></a></div>
                    
            </div>

        </div>
    
    </main>
