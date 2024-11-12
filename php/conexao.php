<?php
$server = "localhost";
$user = "root";
$password = ""; // Deixe vazio se a senha estiver em branco
$database = "bd_sistema";

$conexao = new mysqli($server, $user, $password, $database);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
