<!DOCTYPE html>
<html>
<head>
    <title>Criar Aluna</title>
</head>
<body>
    <h1>Criar Aluna</h1>
    
    <form method="post" action="acoes.php">
        <input type="hidden" name="acao" value="criar">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <button type="submit">Criar</button>
    </form>
</body>
</html>
