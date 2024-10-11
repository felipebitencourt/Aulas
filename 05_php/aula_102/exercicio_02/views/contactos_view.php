<main class="container my-5">

  <div class="row mb-3">
    <div class="col-12 text-center"><h1>Contacos</h1></div>
  </div>

  <div class="row text-center">

    <div class="col">
      <h4>Morada:</h4>
      <p><?= $contacto->morada; ?></p>
    </div>

    <div class="col">
      <h4>Telefone:</h4>
      <p><?= $contacto->telefone; ?></p>
    </div>

    <div class="col">
      <h4>E-mail:</h4>
      <p><?= $contacto->email; ?></p>
    </div>

  </div>

</main>