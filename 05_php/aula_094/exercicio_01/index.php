<?php

$form = isset($_GET["alunos"]);

if($form){
    $alunos = $_GET["alunos"];
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
<body class="center">

    <h1>Arrays</h1>

    <form action="" class="caixa">

        <input class="center" type="text" name="alunos[]" required placeholder="Aluno(a) 1" autofocus>
        <br><br>
        <input class="center"  type="text" name="alunos[]" required placeholder="Aluno(a) 2">
        <br><br>
        <input class="center"  type="text" name="alunos[]" required placeholder="Aluno(a) 3">
        <br><br>

        <input type="submit" value="Salvar">
        
    </form>

    <br>
    <a href="index.php"><button>Reset</button></a>

    <?php if($form): ?>

        <?= "<br>"; ?>

        <?php for($i = 0; $i < count($alunos); $i += 1): ?>

            <?= "<br>"; ?>
            <?= $i+1 , " - $alunos[$i]"; ?>
        
        <?php endfor; ?>

        <?= "<br><br>"; ?>

        <?php print_r($alunos); ?>

    <?php endif; ?>
    
</body>
</html>