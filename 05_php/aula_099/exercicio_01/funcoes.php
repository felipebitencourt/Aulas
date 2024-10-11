<?php

function novaImagem($titulo, $subtitulo, $img){
    $nova_imagem = [
        "titulo" => $titulo,
        "subtitulo" => $subtitulo,
        "img" => $img
    ];
    return $nova_imagem;
}

?>