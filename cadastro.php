<?php
session_start();
require "conexao.php"; // Use o comando require para incluir o arquivo "conexao.php".

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verifique as credenciais.
    $query = "INSERT INTO contas (email, senha) VALUES ('$email', '$senha')";
    if (mysqli_query($conexao, $query)) {
        echo "Cadastro feito! Parabéns!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="cadastro.php">
        <label>Email: <input type="text" name="email" required></label>
        <label>Senha: <input type="password" name="senha" required></label>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="login.php">Já tem uma conta? Faça login</a>
</body>
</html>
