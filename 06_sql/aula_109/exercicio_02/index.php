<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 109.1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Papelaria 3</h1>

    <form action="saida.php" class="caixa">

        <h1>Buscar por faixa de preço</h1>

        <input type="number" name="valormin" step="0.01" min="0.01" required placeholder="Menor Valor">
        <input type="number" name="valormax" step="0.01" min="0.01" required placeholder="Maior Valor">

        <br><br>

        <label for="ordem">Ordem: </label>

        <select name="ordem" id="ordem" required>

            <option value="ASC">Ascendente</option>
            <option value="DESC">Descendente</option>

        </select>

        <br><br>

        <input type="submit" value="Buscar">

    </form>

</body>

</html>