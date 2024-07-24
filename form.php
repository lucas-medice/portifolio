<?php
// Destinatário do e-mail
$destinatario = "contato.lucasmedice@gmail.com";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Constrói o corpo do e-mail
    $body = "===================================\n";
    $body .= "MENSAGEM DO SITE\n";
    $body .= "===================================\n\n";
    $body .= "Nome: $nome\n";
    $body .= "E-mail: $email\n";
    $body .= "Celular: $celular\n";
    $body .= "Mensagem: $mensagem\n\n";
    $body .= "===================================\n";

    // Envia o e-mail
    if (mail($destinatario, "Mensagem do Site", $body, "From: $email\r\n")) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
} else {
    echo "Acesso inválido.";
}
?>