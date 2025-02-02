<?php

function getBanners($nome_da_pagina){
    $resultado = selectSQLUnico("SELECT imagem FROM banners WHERE nome_da_pagina='$nome_da_pagina'");
    return $resultado;
}

?>