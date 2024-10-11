<?php

require_once("base_dados.php");

$colaboradores = selectSQL("SELECT * FROM colaboradores");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 105.2</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <h1>Empresa</h1>

  <div class="caixa">

    <h3>Colaboradores</h3>

    <table>

      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>NIF</th>
        <th>Login</th>
        <th>Senha</th>
      </tr>

      <?php foreach($colaboradores as $c): ?>

        <tr>
          <td><?= $c["id"]; ?></td>
          <td><?= $c["nome"]; ?> <?= $c["apelido"]; ?></td>
          <td><?= $c["nif"]; ?></td>
          <td><?= $c["login"]; ?></td>
          <td><?= $c["senha"]; ?></td>
        </tr>

      <?php endforeach; ?>

    </table>

  </div>
  
</body>
</html>