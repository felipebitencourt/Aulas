<?php

function getMenuPeloNome($nome_da_pagina){
    $resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE nome_da_pagina='$nome_da_pagina'");
    return $resultado;
}

?>