<?php

function getEmpreendimentos(){
    $resultado = selectSQL("SELECT * FROM empreendimentos");
    return $resultado;
}

function getEmpreendimentosEspecifico($id){
    $resultado = selectSQLUnico("SELECT * FROM empreendimentos WHERE id=$id");
    return $resultado;
}

function getEmpreendimentosTitulo($titulo){
    $resultado = selectSQLUnico("SELECT titulo FROM empreendimentos WHERE id=$titulo");
    return $resultado;
}

?>