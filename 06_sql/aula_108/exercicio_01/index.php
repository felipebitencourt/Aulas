<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 108.1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Papelaria 3</h1>

    <form action="saida.php" class="caixa">

        <label for="coluna">Organizar por: </label>

        <br><br>

        <select name="coluna" id="coluna" required>

            <option value="id">ID</option>
            <option value="nome">NOME</option>
            <option value="preco">PREÇO</option>
            <option value="quantidade">QUANTIDADE</option>
            <option value="codigo">CÓDIGO</option>
            <option value="fornecedor">FORNECEDOR</option>

        </select>

        <br><br><br><br>

        <h3>Ordem:</h3>

        <label for="ASC">Ascendente</label>
        <input type="radio" name="ordem" id="ASC" value="ASC" checked required>
        <br>
        <label for="DESC">Descendente</label>
        <input type="radio" name="ordem" id="DESC" value="DESC" required>

        <br><br><br>

        <input type="submit" value="Verificar">

    </form>

</body>

</html>

