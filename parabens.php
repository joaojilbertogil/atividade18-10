<?php
session_start();

if(isset($_SESSION['email'])) {
    echo "Parabéns, funcionou!";
    echo '<br><a href="login.php"><button>Voltar</button></a>';
} else {
    header("Location: login.php");
    exit();
}
?>
