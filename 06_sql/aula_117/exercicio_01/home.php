<?php

require_once("helpers/colaboradores_helper.php");
$usuario_encontrado = verificarLogado();

if(empty($usuario_encontrado)){
    header("Location: index.php");
    exit();
}

$acessos = selectSQL("SELECT * FROM acessos WHERE id_colaborador=$usuario_encontrado[id] ORDER BY id DESC");
$admin = selectSQL("SELECT * FROM admin ORDER BY id DESC");

$total_acessos = count($acessos);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 117.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria<br>Home</h1>

    <nav>
        <a href="home.php"><button class="bg_bt">Home</button></a> | 
        <a href="produtos.php"><button class="bg_bt">Produtos</button></a> | 
        <a href="clientes.php"><button class="bg_bt">Clientes</button></a> | 
        <a href="perfil.php"><button class="bg_bt">Perfil</button></a> | 
        <a href="logout.php"><button class="bg_bt">Sair</button></a>
    </nav>

    <h3>Bem-vindo(a): <?= $usuario_encontrado["nome"] ?>!</h3>

    <p>Data do último acesso: ( <?= $usuario_encontrado["data_ultimo_acesso"]; ?> )</p>

    <br><br>

    <table>

        <tr>
            <th>Acesso</th>
            <th>Data</th>
        </tr>

        <?php foreach($acessos as $i => $a): ?>

            <tr>
                <td><?= $total_acessos - $i; ?></td>
                <td><?= $a["data"]; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

    <br><br>

    <h3>ADMIN</h3>

    <table>

        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Data Acesso</th>
        </tr>

        <?php foreach($admin as $a): ?>

            <tr>
                <td><?= $a["id"]; ?></td>
                <td><?= $a["user"]; ?></td>
                <td><?= $a["data_acesso"]; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>