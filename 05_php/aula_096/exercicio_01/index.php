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
    
    <div class="caixa center">

        <h3>Cadastro de Pessoas</h3>

        <form action="saida.php">

            <input type="text" name="pessoas[nome]" required autofocus placeholder="Nome">
            <br><br>
            <input type="number" name="pessoas[idade]" required min="1" placeholder="Idade">
            <br><br>
            <input type="number" name="pessoas[altura]" required min="1" step="0.01" placeholder="Altura">
            <br><br>
                <select name="pessoas[genero]">
                    <option value="">Gênero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
                </label>
            <br><br>
            <input type="submit" value="Cadastrar">
            <br><br>

        </form>

    </div>

</div>
</html>