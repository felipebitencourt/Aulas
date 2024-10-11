<?php

require_once("globais.php");
$pagina_atual = "pesquisa";

$form = isset($_GET["pesquisa"]);
if($form){
  $pesquisa = strtolower($_GET["pesquisa"]);
  $resultado = [];
  foreach($viagens as $i => $v){
  //  if(strtolower($v->nome) == $pesquisa){$resultado[] = $v;}
    if(str_contains(strtolower($v->nome), $pesquisa)){
      $v->id = $i;
      $resultado[] = $v;
    }
  }
}

require("componentes/header.php");
require("views/pesquisa_view.php");
require("componentes/footer.php");

?>