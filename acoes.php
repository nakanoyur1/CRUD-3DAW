<?php
$acao = isset($_POST['acao']) ? $_POST['acao'] : '';

if ($acao === 'criar') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (!empty($nome) && !empty($matricula) && !empty($email)) {
        $aluna = "$nome;$matricula;$email\n";
        file_put_contents('alunas.txt', $aluna, FILE_APPEND);
    }
} elseif ($acao === 'remover') {
    $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';
    if (!empty($matricula)) {
        $linhas = file('alunas.txt');
        foreach ($linhas as $indice => $linha) {
            $dados = explode(';', trim($linha));
            if ($dados[1] === $matricula) {
                unset($linhas[$indice]);
                file_put_contents('alunas.txt', implode('', $linhas));
                break;
            }
        }
    }
} elseif ($acao === 'alterar') {
    $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';
    $novo_nome = isset($_POST['novo_nome']) ? $_POST['novo_nome'] : '';
    $novo_email = isset($_POST['novo_email']) ? $_POST['novo_email'] : '';
    if (!empty($matricula) && !empty($novo_nome) && !empty($novo_email)) {
        $linhas = file('alunas.txt');
        foreach ($linhas as $indice => $linha) {
            $dados = explode(';', trim($linha));
            if ($dados[1] === $matricula) {
                $linhas[$indice] = "$novo_nome;$matricula;$novo_email\n";
                file_put_contents('alunas.txt', implode('', $linhas));
                break;
            }
        }
    }
}

header('Location: index.html');
?>
