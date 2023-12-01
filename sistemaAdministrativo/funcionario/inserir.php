<?php
include '../conexao.php';

$codigo = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];
$salario = $_REQUEST['salario'];
$data_nascimento = $_REQUEST['data_nascimento'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];
$funcao = $_REQUEST['funcao'];


$sql = "INSERT INTO funcionario (codigo, nome, salario, data_nascimento, cpf, senha, funcao)
VALUES ('$codigo', '$nome', '$salario', '$data_nascimento', '$cpf', '$senha' , '$funcao')";

$resultado = mysqli_query($conexao, $sql) or die("Erro ao inserir");

header('Location:../funcionario.php');

?>