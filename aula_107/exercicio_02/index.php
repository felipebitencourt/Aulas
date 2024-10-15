<?php

require_once("base_dados.php");

$produto_especifico = selectSQL("SELECT * FROM produtos WHERE nome LIKE '%caneta%'");

?>

<pre><?php print_r($produto_especifico); ?></pre>