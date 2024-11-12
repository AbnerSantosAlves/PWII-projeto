<?php

$server = "localhost";
$user = "root";
$password = "root";

$conexao = new mysqli($server, $user, $password);

$banco = "create database BD_sistema";
$conexao->query($banco);

?>