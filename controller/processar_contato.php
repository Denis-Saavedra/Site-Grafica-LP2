<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $agora = date('Y-m-d_H-i-s');

    // Define o nome do arquivo de texto
    $nomeArquivo = "../mensagens/menssagem_".$agora.".txt";

    // Cria ou abre o arquivo no modo de escrita (append)
    $arquivo = fopen($nomeArquivo, "a");

    // Verifica se o arquivo foi aberto com sucesso
    if ($arquivo) {
        // Formata os dados a serem escritos no arquivo
        $dados = "Nome: $nome\n";
        $dados .= "Email: $email\n";
        $dados .= "Assunto: $assunto\n";
        $dados .= "Mensagem: $mensagem\n\n";

        // Escreve os dados no arquivo
        fwrite($arquivo, $dados);

        // Fecha o arquivo
        fclose($arquivo);
    } else {
        echo "Erro ao abrir o arquivo.";
        echo "<br>".$nomeArquivo;
    }
}
?>