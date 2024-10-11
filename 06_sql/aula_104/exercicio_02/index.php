<?php

// $produtos = [
//   ["nome" => "Papel A4", "preco" => 3.99, "quatidade" => 44, "codigo" => "111", "fornecedor" => "Empresa 1"],
//   ["nome" => "Caneta Azul", "preco" => 1.25, "quatidade" => 123, "codigo" => "222", "fornecedor" => "Empresa 2"],
//   ["nome" => "Lápis", "preco" => 0.99, "quatidade" => 321, "codigo" => "333", "fornecedor" => "Empresa 3"],
// ];


$conexao = new PDO("mysql:host=localhost;dbname=codemaster_professor_bd;charset=utf8mb4;", "root", "");

$consulta = $conexao->query("SELECT * FROM produtos");
$produtos = $consulta->fetchAll(PDO::FETCH_BOTH);

$consulta = $conexao->query("SELECT * FROM colaboradores");
$colaboradores = $consulta->fetchAll(PDO::FETCH_NUM);

$consulta = $conexao->query("SELECT * FROM clientes");
$clientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($produtos);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($colaboradores);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($clientes);
echo "</pre>";

?>

