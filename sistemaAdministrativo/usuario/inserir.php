<?php
include '../conexao.php';

$nome = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];
$cpf = $_REQUEST['cpf'];
$codigo = $_REQUEST['codigo'];

$sql = "INSERT INTO usuario (codigo, nome, cpf, senha)
VALUES ('$codigo', '$nome', '$cpf', '$senha')";

$resultado = mysqli_query($conexao, $sql) or die("Erro ao inserir");

header('Location:../principal.php');

?>