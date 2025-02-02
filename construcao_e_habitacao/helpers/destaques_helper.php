<?php

$total_elementos_por_paginas = 6;

function getTodosDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}

function getDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques WHERE esta_na_home=1");
    return $resultado;
}

function getDestaqueEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM destaques WHERE id=$id");
    return $resultado;
}

function getTotalElementos(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM destaques");
    return $resultado["total"];
}

function getTotalPaginas(){
    global $total_elementos_por_paginas;
    $resultado = ceil(getTotalElementos() / $total_elementos_por_paginas);
    return $resultado;
}

function getDestaquesPorPaginas($pagina){
    global $total_elementos_por_paginas;
    $ponto_partida = ($pagina - 1) * $total_elementos_por_paginas;
    $resultado = selectSQL("SELECT * FROM destaques ORDER BY id DESC LIMIT $total_elementos_por_paginas OFFSET $ponto_partida");
    return $resultado;
}

?>