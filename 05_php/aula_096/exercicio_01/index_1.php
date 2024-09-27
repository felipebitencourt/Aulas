<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 96.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Matrizes</h1>

    <br>
    
</body>
</html>


<?php

require_once("funcoes.php");

$vetor = ["fabricio", "maria", "joao"];
$matriz = [
    ["fabricio", "maria", "joao"],
    ["carlos", "ana", "jose"],
    ["marcos", "miguel", "rosa"]
];

echo $matriz[1][1] . "<br>";
echo count($matriz[1]) . "<br>";

$total_pessoas = 0;
foreach($matriz as $turma){
    $total_pessoas += count($turma);
}

echo $total_pessoas . "<br>";

echo "<hr>";

// $filmes = [
//     ["titulo" => "Procurando Nemo",
//     "imagem" => "nemo.jpg",
//     "snopse" => "lorem lorem lorem lorem lorem lorem lorem..."
//     ],
//     ["titulo" => "Vingadores",
//     "imagem" => "vingadores.jpg",
//     "snopse" => "lorem lorem lorem lorem lorem lorem lorem..."
//     ],
//     ["titulo" => "Paixão de Cristo",
//     "imagem" => "cristo.jpg",
//     "snopse" => "lorem lorem lorem lorem lorem lorem lorem..."
//     ]
// ];

echo $filmes[1]["titulo"] . "<br>";

// $filmes = [];
// $filmes[] = novoFilme("Procurando Nemo", "123nemojpg123", "loremloremlorem");

echo "<br>";

?>

<?php foreach($filmes as $f): ?>

    <div class="card">

        <h3><?= $f["titulo"]; ?></h3>
        <img src="<?= $f["imagem"]; ?>" alt="">
        <p><?= $f["texto"]; ?></p>

    </div>

<?php endforeach; ?>