  <footer class="container-fluid bg-primary py-3 text-white text-center">

  <?php if($pagina_atual != "contactos"): ?>

    <div class="row border-bottom border-dark mb-3">

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

  <?php endif; ?>

  <div class="row">
    <div class="col-12">COPYRIGHT © <?= date("Y"); ?> Felipe Bitencourt</div>
  </div>

  </footer>
  
</body>
</html>