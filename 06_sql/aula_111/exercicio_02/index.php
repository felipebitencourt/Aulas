<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 111.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Papelaria 5</h1>

    <div class="caixa">

        <h3>Cadastro de Produtos</h3>

        <form action="saida.php">

            <input type="text" name="nome" placeholder="Nome" required autofocus>
            <br><br>
            <input type="number" name="preco" placeholder="Preço" required min="0.01" step="0.01">
            <br><br>
            <input type="number" name="codigo" placeholder="Código" required min="1">
            <br><br>
            <input type="number" name="quantidade" placeholder="Quantidade" required min="1">
            <br><br>
            <input type="text" name="fornecedor" placeholder="Fornecedor" required>

            <br><br>

            <input type="submit" value="Cadastrar">

        </form>

    </div>
  
</body>
</html>