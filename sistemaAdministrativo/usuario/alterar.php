<?php 
    include '../conexao.php';


if(isset($_REQUEST['id'])){


    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $senha = $_REQUEST['senha'];
    $cpf = $_REQUEST['cpf'];
    $codigo = $_REQUEST['codigo'];

    $sql = "UPDATE usuario SET nome='$nome', codigo='$codigo', senha='$senha',
    cpf='$cpf' WHERE id='$id' ";
    $resultado = mysqli_query($conexao, $sql);
    header('Location: ../principal.php');
}else{
    header('Location: ../principal.php');
}

?>