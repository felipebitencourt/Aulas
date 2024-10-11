<?php

function novoFilme($titulo, $imagem, $texto){
    $novo_filme = [
        "titulo" => $titulo,
        "imagem" => $imagem,
        "texto" => $texto
    ];
    return $novo_filme;
}

?>