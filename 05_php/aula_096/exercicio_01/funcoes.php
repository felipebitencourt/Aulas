<?php

function novaPessoa($nome, $idade, $altura, $genero){
    $nova_pessoa = [
        "nome" => $nome,
        "idade" => intval($idade),
        "altura" => floatval($altura),
        "genero" => $genero
    ];
    return $nova_pessoa;
}

?>