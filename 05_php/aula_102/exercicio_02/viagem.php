<?php

require_once("globais.php");
$pagina_atual = "viagem";

$posicao = -1;

$encontrado = false;
$form = isset($_GET["posicao"]);
if($form){
  $posicao = intval($_GET["posicao"]);
  if($posicao >= 0 && $posicao < count($viagens)){
    $viagem_especifica = $viagens[$posicao];
    $encontrado = true;
  }
}

require("componentes/header.php");
require("views/viagem_view.php");
require("componentes/footer.php");

?>