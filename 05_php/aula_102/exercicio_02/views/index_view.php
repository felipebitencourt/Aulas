<main class="container my-5">

  <div class="row mb-3">
    <div class="col-12 text-center"><h1>Bem-vindo</h1></div>
  </div>

  <div class="row">
    <div class="col-12">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aliquam nulla assumenda soluta deleniti est voluptas, libero quos ullam error tempora nisi numquam earum saepe iusto explicabo esse inventore hic!
      </p>
    </div>
  </div>

  <div class="row mt-5 mb-3">
    <div class="col-12 text-center">
      <h1>Destaques</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex justify-content-center gap-5 flex-wrap">

      <?php foreach($viagens as $i => $v): ?>

        <div class="card text-center" style="width: 18rem;">
          <img src="<?= $v->imagem; ?>" class="card-img-top" alt="<?= $v->nome; ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $v->nome; ?></h5>
            <p class="card-text"><?= substr(strip_tags($v->texto), 0, $config["total_caracteres"]); ?></p>
            <a href="viagem.php?posicao=<?= $i; ?>" class="btn btn-primary">Ver Mais</a>
          </div>
        </div>
      
      <?php endforeach; ?>

    </div>  
  </div>

</main>