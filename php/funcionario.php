<?php
$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_sistema";

$conexao = new mysqli($server, $user, $password, $database);

$tabela = "create table tb_funcionario(
    id_funcionario int primary key auto_increment,
    nm_funcionario varchar(45),
    sobrenome varchar(45),
    dt_nascimento date,
    cargo varchar(45),
    salario decimal,
    senha text
    );";

$conexao->query($tabela)
?>