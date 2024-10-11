<?php

require_once("globais.php");

$form = isset($_GET["posicao"]);

if($form){
    $posicao = intval($_GET["posicao"]);
    $filme_pedido = $filmes[$posicao];
    if($posicao >= 0 && $posicao < count($filmes)){
        $filme_pedido = $filmes[$posicao];
    }
}
else{
    header("Location: index.php");
    exit;
}

$pagina_atual = "filme";

require("component/header.php");
require("views/filme_view.php");
require("component/footer.php");

?>