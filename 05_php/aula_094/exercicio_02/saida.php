<?php

$form = isset($_GET["quantidade"]);
$form_2 = isset($_GET["idadeh"]) && isset($_GET["idadem"]);

if($form){
    $quantidade = intval($_GET["quantidade"]);
}
else{
    header("Location: index.php");
    exit();
}
if($form_2){
    $idadeh = $_GET["idadeh"];
    $idadem = $_GET["idadem"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 94.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <h1>Cálculo das Idades</h1>

    <div class="caixa">

        <form action="">

            <input type="hidden" name="quantidade" required value="<?= $quantidade; ?>">

            <label for="idadeh">Homens</label>

            <br>

            <?php for($i = 1; $i <= $quantidade; $i += 1): ?>

                <input class="center" type="number" name="idadeh[]" required min="1" placeholder="Idade Homem <?= $i; ?> " autofocus value="<?= ($form_2)? $idadeh[$i-1] : ""; ?>">

            <?php endfor; ?>

            <br><br>

            <label for="idadem">Mulheres</label>

            <br>

            <?php for($i = 1; $i <= $quantidade; $i += 1): ?>

                <input class="center" type="number" name="idadem[]" required min="1" placeholder="Idade Mulher <?= $i; ?>" value="<?= ($form_2) ? $idadem[$i-1] : ""; ?>">

            <?php endfor; ?>

            <br><br>
            <input type="submit" value="Salvar">

        </form>

    </div>

    <br><br>

    <?php if($form_2): ?>

        <div class="caixa caixa_2">

            <?php

                echo "Homem mais velho (". max($idadeh) . ") + Mulher mais nova (" . min($idadem) . ") = (" . max($idadeh) + min($idadem) . ")";
                echo "<br><br>";
                echo "Homem mais novo (". min($idadeh) . ") x Mulher mais velha (" . max($idadem) . ") = (" . min($idadeh) * max($idadem) . ")";
            
            ?>

            <br><br>
            <a href="index.php"><button>Reset</button></a>

        </div>

        <br><br>

        <div class="caixa caixa_2">

            <!-- <?php
                
                echo "Idades Masculinas <br>";

                foreach($idadeh as $i){echo $i . " - ";}

                echo "<br><br>";

                echo "Idades Femininas <br>";

                foreach($idadem as $i){echo $i . " - ";}

            ?> -->

            <!-- <?php

                echo "Idades Masculinas <br>";
                
                for($i = 0; $i < count($idadeh); $i += 1){
                    echo $idadeh[$i];
                    if($i < count($idadeh) - 1){echo " - ";}
                }

                echo "<br><br>";

                echo "Idades Femininas <br>";

                for($i = 0; $i < count($idadem); $i += 1){
                    echo $idadem[$i];
                    if($i < count($idadem) - 1){echo " - ";}
                }

            ?> -->

            <!-- <?php

            echo "Idades Masculinas <br>";
                            
            for($i = 0; $i < count($idadeh); $i += 1){echo $idadeh[$i] . (($i < count($idadeh) - 1) ? " - " : "");}

            echo "<br><br>";

            echo "Idades Femininas <br>";

            for($i = 0; $i < count($idadem); $i += 1){echo $idadem[$i] . (($i < count($idadem) - 1) ? " - " : "");}

            ?> -->

            <!-- Melhor solução para imprimir a concatenação -->

            <h3>Idades Masculinas</h3>
            <p><?= implode(" - ", $idadeh); ?></p>

            <br><br>

            <h3>Idades Femininas</h3>
            <p><?= implode(" - ", $idadem); ?></p>

        </div>

    <?php endif; ?>

</body>
</html>