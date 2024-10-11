<?php

require_once("base_dados.php");

// $consulta = $conexao->query("SELECT * FROM produtos");
// $produtos = $consulta->fetchAll(PDO::FETCH_BOTH);

// $consulta = $conexao->query("SELECT * FROM colaboradores");
// $colaboradores = $consulta->fetchAll(PDO::FETCH_NUM);

// $consulta = $conexao->query("SELECT * FROM clientes");
// $clientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

$produtos = selectSQL("SELECT * FROM produtos");
$colaboradores = selectSQL("SELECT * FROM colaboradores");
$clientes = selectSQL("SELECT * FROM clientes");

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

