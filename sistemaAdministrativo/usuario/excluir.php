<?php
include '../conexao.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM usuario WHERE usuario.id = '$id' ";

$result = mysqli_query($conexao, $sql) or die("Erro ao excluir");

header('Location:../principal.php');


?>