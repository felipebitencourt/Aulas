<main class="container my-5">

  <?php if($encontrado): ?>

    <div class="row mb-3">
      <div class="col-12 text-center"><h1><?= $viagem_especifica->nome; ?></h1></div>
    </div>

    <div class="row">
      <div class="col-12">
        <img src="<?= $viagem_especifica->imagem; ?>" alt="<?= $viagem_especifica->nome; ?>" class="float-end imagem-principal">
        <?= $viagem_especifica->texto; ?>
      </div>
    </div>

  <?php else: ?>

    <div class="row mb-3">
      <div class="col-12 text-center"><h1>404 - VIAGEM NÃO ENCONTRADA.</h1></div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
        <a href="index.php"><button class="btn btn-primary">Voltar Para Home</button></a>
      </div>
    </div>

  <?php endif; ?>

</main>