<?php

$total_noticias_por_paginas = 6;

function getNoticias(){
    $resultado = selectSQL("SELECT * FROM noticias");
    return $resultado;
}


function getTotalElementosNoticias(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM noticias");
    return $resultado["total"];
}

function getTotalNoticiasPaginas(){
    global $total_noticias_por_paginas;
    $resultado = ceil(getTotalElementos() / $total_noticias_por_paginas);
    return $resultado;
}

function getNoticiasPorPaginas($pagina){
    global $total_noticias_por_paginas;
    $ponto_partida = ($pagina - 1) * $total_noticias_por_paginas;
    $resultado = selectSQL("SELECT * FROM noticias ORDER BY id DESC LIMIT $total_noticias_por_paginas OFFSET $ponto_partida");
    return $resultado;
}

?>