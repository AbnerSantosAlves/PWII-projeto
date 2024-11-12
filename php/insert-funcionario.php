<?php
$server = "localhost";
$user = "root";
$password = "root";
$database = "BD_sistema";

//Recebendo os dados do formulario
$nome = $_POST['nome'];
$sobrenome = $_POST ['sobrenome'];
$dt_nascimento = $_POST['dt_nascimento'];
$cargo = $_POST[ 'cargo'];
$salario = $_POST[ 'salario'];
$senha = $_POST ['senha'];

include 'conexao.php';
$insert_funcionario = "INSERT INTO tb_funcionario VALUES (null, '$nome', '$sobrenome', '$dt_nascimento', '$cargo', '$salario', '$senha');";

$resultado = $conexao->query($insert_funcionario);
if ($resultado) {
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}


?>

