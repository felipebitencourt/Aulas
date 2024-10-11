<?php

require_once("globais.php");

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 102.1</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <h1>Classes PHP</h1>

  <div class="caixa">

    <table>

      <tr>
        <th>POSIÇÃO</th>
        <th>NOME</th>
        <th>IDADE</th>
        <th>ALTURA</th>
        <th>GÉNERO</th>
      </tr>

      <?php foreach($pessoas as $i => $p){$p->getTabela($i);} ?>

    </table>

  </div>

  <div class="caixa" style="text-align: left;"><pre><?php print_r($pessoas); ?></pre></div>

</body>
</html>