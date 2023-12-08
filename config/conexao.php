<!-- conexao.php -->

<?php
$servername = "18.217.64.119";
$username = "admin";
$password = "admin";
$dbname = "cadastro_usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
