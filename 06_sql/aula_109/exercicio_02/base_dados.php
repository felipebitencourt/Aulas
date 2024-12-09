<?php

$base_dados = [
    "host" => "localhost",
    "dbname" => "codemaster_10_bd",
    "user" => "root",
    "password" => ""

];

$conexao = new PDO("mysql:host=$base_dados[host];dbname=$base_dados[dbname];charset=utf8mb4;", $base_dados["user"], $base_dados["password"]);

function selectSQL($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectSQLUnico($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

?>