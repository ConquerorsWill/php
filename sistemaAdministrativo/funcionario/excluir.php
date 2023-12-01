<?php
include '../conexao.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM funcionario WHERE funcionario.id = '$id' ";

$result = mysqli_query($conexao, $sql) or die("Erro ao excluir");

header('Location:../funcionario.php');


?>