<?php

require_once("base_dados.php");

$noticias = selectSQL("SELECT * FROM noticias");
$carousel = selectSQL("SELECT * FROM carousel");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 105.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Notícias</h1>

    <div class="caixa">

        <table class="center">

            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Data</th>
                <th>Autor</th>
                <th>Imagem</th>
            </tr>

            <?php foreach($noticias as $n): ?>
                <tr>
                    <td><?= $n["id"]; ?></td>
                    <td><?= $n["titulo"]; ?></td>
                    <td><?= $n["subtitulo"]; ?></td>
                    <td><?= date("d M Y", strtotime($n["data"])); ?></td>
                    <td><?= $n["autor"]; ?></td>
                    <td><img src="<?= $n["imagem"]; ?>" alt="Paisagem" width="100"></td>
                </tr>

            <?php endforeach; ?>

        </table>

    </div>

    <br>
    <hr>

    <h1>Carousel</h1>

    <div class="caixa">

        <table class="center">

            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Imagem</th>
                <th>Autor</th>
                <th>Data de Criação</th>
            </tr>

            <?php foreach($carousel as $c): ?>
                <tr>
                    <td><?= $c["id"]; ?></td>
                    <td><?= $c["titulo"]; ?></td>
                    <td><?= substr($c["texto"], 0, 60); ?>...</td>
                    <td><img src="<?= $c["imagem"]; ?>" alt="Paisagem" width="100"></td>
                    <td><?= $c["autor"]; ?></td>
                    <td><?= date("d M Y", strtotime($c["data_criacao"])); ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

    </div>
    
</body>
</html>