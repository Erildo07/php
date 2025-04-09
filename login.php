<?php
// login.php

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Usuário e senha fixos para exemplo
    $usuario_correto = "admin";
    $senha_correta = "123456";

    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        $mensagem = "Login bem-sucedido! Bem-vindo, $usuario.";
    } else {
        $mensagem = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Simples</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>

    <p><?php echo $mensagem; ?></p>
</body>
</html>
