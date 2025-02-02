<?php

function getCarousel(){
    $resultado = selectSQL("SELECT imagem FROM carousel");
    return $resultado;
}

?>