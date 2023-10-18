<?php
session_start();
require "conexao.php"; // Use o comando require para incluir o arquivo "conexao.php".

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verifique as credenciais.
    $query = "SELECT * FROM contas WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["email"] = $email;
        header("Location: parabens.php");
        exit();
    } else {
        echo "Credenciais inválidas.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="login.php">
        <label>Email: <input type="text" name="email" required></label>
        <label>Senha: <input type="password" name="senha" required></label>
        <button type="submit">Login</button>
    </form>
    <a href="cadastro.php">Criar Conta</a>
</body>
</html>
