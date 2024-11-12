<?php
session_start();

$name_user = $_POST['name'];
$senha = $_POST['senha'];

include 'conexao.php';

// Ajustando o nome do campo para "senha" de acordo com o banco de dados
$select = "SELECT * FROM tb_funcionario WHERE nm_funcionario = '$name_user'";
$query = $conexao->query($select);

if ($query->num_rows > 0) {
    $resultado = $query->fetch_assoc();
    $senha_banco = $resultado['senha'];

    if ($senha == $senha_banco) {
        $_SESSION['nm_funcionario'] = $resultado['nm_funcionario'];
        header('Location: ../home.php'); // Alterado para home.php
        exit();
    } else {
        echo "<script>alert('Usuário ou senha inválidos'); history.back();</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado'); history.back();</script>";
}
?>
