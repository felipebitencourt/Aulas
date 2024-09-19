<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 90.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">

    <form action="saida.php">
        <input type="text" name="perfil" required placeholder="Nome*" autofocus>
        <br><br>
        <textarea name="sobre" placeholder="Sobre*" cols="100" rows="10" required></textarea>
        <br><br>
        <input type="text" name="perfil_antes" required placeholder="Perfis Anteriores*" autofocus>
        <br><br>
        <input type="text" name="perfil_depois" required placeholder="Perfis Posteriores*" autofocus>
        <br><br>
        <input type="text" name="foto"  placeholder="Link Foto" autofocus>
        <br><br>
        <input type="submit" value="Ir">
    </form>

</body>
</html>