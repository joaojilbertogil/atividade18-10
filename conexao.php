<?php
$host = "localhost"; // Servidor local
$user = "root"; // Usuário do servidor
$pass = ""; // Senha do banco de dados
$banco = "contasdb"; // Nome do banco
$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error($conexao)); // Faz a conexão com o banco de dados, caso não consiga, será apresentada uma mensagem de erro pelo comando mysqli_error
?>
