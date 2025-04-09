<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário e trata para evitar código malicioso
    $nome = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mensagem = htmlspecialchars(trim($_POST["message"]));

    // Define para onde o e-mail será enviado (coloque o e-mail do colégio aqui)
    $destinatario = "brendamirellisenhorinho@gmail.com";

    // Assunto do e-mail
    $assunto = "Novo contato do site";

    // Corpo da mensagem
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        // Redireciona para a página de obrigado
        header("Location: obrigado.html");
        exit;
    } else {
        echo "Erro ao enviar o e-mail. Tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido.";
}
?>
