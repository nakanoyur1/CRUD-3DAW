<!DOCTYPE html>
<html>
<head>
    <title>Alterar Aluna</title>
</head>
<body>
    <h1>Alterar Aluna</h1>
    
    <form method="post" action="acoes.php">
        <input type="hidden" name="acao" value="alterar">
        <label for="matricula">Matrícula da Aluna:</label>
        <input type="text" name="matricula" required><br>
        <label for="novo_nome">Novo Nome:</label>
        <input type="text" name="novo_nome" required><br>
        <label for="novo_email">Novo Email:</label>
        <input type="email" name="novo_email" required><br>
        <button type="submit">Alterar</button>
    </form>
</body>
</html>
