<?php

require_once("funcoes.php");

$form = isset($_GET["pessoas"]);

$pessoas = [];

$pessoas[] = novaPessoa("Felipe Bitencourt", 27, 1.73, "Masuclino");
$pessoas[] = novaPessoa("Ana Maria", 21, 1.53, "Feminino");
$pessoas[] = novaPessoa("João Paulo", 17, 1.80, "Masculino");

if($form){
    $pessoas[] = $_GET["pessoas"];
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
    <title>Exercício 96.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="center">

    <h1>Arrays com Chaves</h1>
    
    <?php if($form): ?>

        <div class="caixa caixa_tb">

            <table>

                <tr>
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Altura</th>
                    <th>Gênero</th>
                </tr>

                <?php foreach($pessoas as $i => $p): ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $p["nome"]; ?></td>
                        <td><?= $p["idade"]; ?></td>
                        <td><?= number_format($p["altura"], 2); ?></td>
                        <td><?= $p["genero"]; ?></td>
                    </tr>

                <?php endforeach; ?>

            </table>

        </div>    

        <!-- <div class="caixa caixa_tb">

            <h1>Cadastros</h1>

            <table>

                <tr>
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Altura</th>
                    <th>Gênero</th>
                </tr>

                <?php for($i = 0; $i < count($pessoas); $i += 1): ?>

                    <tr>
                        <td><?= $i+1; ?></td>
                        <td><?= $pessoas[$i]["nome"]; ?></td>
                        <td><?= $pessoas[$i]["idade"]; ?></td>
                        <td><?= number_format($pessoas[$i]["altura"], 2); ?></td>
                        <td><?= $pessoas[$i]["genero"]; ?></td>
                    </tr>

                <?php endfor; ?>

            </table> -->

            <br>
            <a href="index.php"><button>Reset</button></a>

        </div>

        <br><br>
        
        <div class="caixa">

            <pre> <?php print_r($pessoas); ?> </pre>

        </div>

    <?php endif; ?>


</div>
</html>