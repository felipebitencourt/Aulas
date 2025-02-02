<?php

function getCentroFerias(){
    $resultado = selectSQLUnico("SELECT * FROM centro_ferias");
    return $resultado;
}

?>