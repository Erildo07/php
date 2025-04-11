<?php
// login.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    
    $usuario_correto = "admin";
    $senha_correta = "123456";

    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        echo "Login bem-sucedido! Bem-vindo, $usuario.";
    } else {
        echo "Usuário ou senha incorretos.";
    }
} else {
    echo "Requisição inválida.";
}
