<?php

$turma = ["fabrício", "maria", "joão"];
$turma_antiga = array("fabrício", "maria", "joão");

// echo $turma;
// var_dump($turma);

echo "<br>";
print_r($turma);
echo "<br>";
print_r($turma_antiga);

echo "<hr>";

echo $turma[1];
$turma[1] = "ana";
echo "<br>";
echo $turma[1];

// Para adicionar o colchetes deve estar vazio.
$turma[] = "jose";
echo "<br>";
echo "<br>";
print_r($turma);

array_push($turma, "marta", "diogo");
echo "<br>";
print_r($turma);

echo "<hr>";

array_pop($turma);
echo "<br>";
print_r($turma);

echo "<hr>";

// número "2" é a posição e o segundo número serão quantos elementos serão removidos após aquela posição.

array_splice($turma, 2, 1);
echo "<br>";
print_r($turma);

$from = isset($_GET["alunos"]);

if($form){
    $alunos = $_GET["alunos"];
}
else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 94.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Arrays</h1>

    <form action="">

        <input type="text" name="alunos[]" required placeholder="ALuno(a) 1">
        <br><br>
        <input type="text" name="alunos[]" required placeholder="ALuno(a) 1">
        <br><br>
        <input type="text" name="alunos[]" required placeholder="ALuno(a) 1">
        <br>
        
    </form>

    <?php if($form): ?>



    <?php endif; ?>
    
</body>
</html>