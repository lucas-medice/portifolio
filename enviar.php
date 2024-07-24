<?php

    $nome = addslashes($_POST[nome]);
    $email = addslashes($_POST[email]);
    $celular = addslashes($_POST[celular]);
    $mensagem = addslashes($_POST[mensagem])

    $destino = "contato.lucasmedice@gmail.com";
    $assunto = "Coleta de dados - Portifólio"

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular. "Mensagem: ".$mensagem;

    $cabecalho = "From: contato.lucasmedice@gmail.com"."\n"."Reply-to ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabecalho)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email, tente novamente.");
    }

?>