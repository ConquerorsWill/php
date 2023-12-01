<?php
include '../conexao.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM funcao WHERE funcao.id = '$id' ";

$result = mysqli_query($conexao, $sql) or die("Erro ao excluir");

header('Location:../funcao.php');


?>