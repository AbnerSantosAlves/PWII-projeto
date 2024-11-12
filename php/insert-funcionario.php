<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "bd_sistema";

// Recebendo os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dt_nascimento = $_POST['dt_nascimento'];
$dt_admissao = $_POST['dt_admissao'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$senha = $_POST['senha'];

include 'conexao.php';

// Inclui as colunas na consulta e adiciona a vírgula que faltava entre os valores
$insert_funcionario = "INSERT INTO tb_funcionario (nm_funcionario, sobrenome, dt_nascimento, dt_admissao, cargo, salario, senha) 
VALUES ('$nome', '$sobrenome', '$dt_nascimento', '$dt_admissao', '$cargo', '$salario', '$senha');";

$resultado = $conexao->query($insert_funcionario);

if ($resultado) {
    echo "<script>alert('Inserido com sucesso'); history.back()</script>";
} else {
    echo "Erro ao inserir funcionário: " . $conexao->error;
}
?>
