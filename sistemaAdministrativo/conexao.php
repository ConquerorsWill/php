<?php
$endereco ="localhost";
$nome ="agenda";
$usuario ="root";
$senha ="";
$conexao = mysqli_connect ($endereco,$usuario,$senha,$nome);
if(!$conexao){
die("erro na conexao do banco".mysqli_connect_error());
}

?>