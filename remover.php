<!DOCTYPE html>
<html>
<head>
    <title>Remover Aluna</title>
</head>
<body>
    <h1>Remover Aluna</h1>
    
    <form method="post" action="acoes.php">
        <input type="hidden" name="acao" value="remover">
        <label for="matricula">Matrícula da Aluna:</label>
        <input type="text" name="matricula" required><br>
        <button type="submit">Remover</button>
    </form>
</body>
</html>
