<?php
//pegar os dados do formulario e armazenar na variavel
$id_user = $_POST['id'];
$senha = $_POST['senha'];


include 'conexao.php';

$select = "SELECT * FROM tb funcionario WHERE id funcionario = $id user";
$query = $conexao->query($select);
$resultado = $query->fetch_assoc();

$id_user_banco = $resultado['id funcionario'];
$id_senha_banco = $resultado['nm senha'];

if ($id_user == $id_user_banco && $senha == $id_senha_banco) {
    header('location: ../home.html');
}
else{
    echo "<script>alert('usuario ou senha invalida'); history.back() </script>";
}  


?>