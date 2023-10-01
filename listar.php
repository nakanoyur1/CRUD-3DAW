<!DOCTYPE html>
<html>
<head>
    <title>Listar Alunas</title>
</head>
<body>
    <h1>Listar Alunas</h1>
    
    <?php
    // Código para listar alunas aqui
    if (file_exists('alunas.txt')) {
        echo '<h2>Alunas:</h2>';
        $linhas = file('alunas.txt');
        echo '<ul>';
        foreach ($linhas as $linha) {
            $dados = explode(';', trim($linha));
            echo '<li>' . $dados[0] . ' (Matrícula: ' . $dados[1] . ', Email: ' . $dados[2] . ')</li>';
        }
        echo '</ul>';
        
        echo '<p><a href="alunas.txt" download>Download do arquivo de alunas</a></p>';
    } else {
        echo '<p>Nenhuma aluna cadastrada ainda.</p>';
    }
    ?>
</body>
</html>
