<main class="container my-5">

  <div class="row mb-3">
    <div class="col-12 text-center"><h1>Resultado da Pesquisa ( <?= $pesquisa; ?> ) </h1></div>
  </div>

  <div class="row">
    <div class="col-12 d-flex justify-content-center gap-5 flex-wrap">

      <?php foreach($resultado as $i => $v): ?>

        <div class="card text-center" style="width: 18rem;">
          <img src="<?= $v->imagem; ?>" class="card-img-top" alt="<?= $v->nome; ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $v->nome; ?></h5>
            <p class="card-text"><?= substr(strip_tags($v->texto), 0, $config["total_caracteres"]); ?></p>
            <a href="viagem.php?posicao=<?= $v->$id; ?>" class="btn btn-primary">Ver Mais</a>
          </div>
        </div>
      
      <?php endforeach; ?>

      <?php if(count($resultado) == 0): ?>

        <h3>Nenhum resultado foi encontrado.</h3>

      <?php endif; ?>

    </div>  
  </div>

</main>