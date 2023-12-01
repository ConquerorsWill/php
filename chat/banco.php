<?php
    $nomeServidor = "sql301.infinityfree.com"; //localhost
    $username = "if0_35249671"; //root
    $senha = "sXPJtGwRzc4OREB"; //""
    $nomeBanco = "if0_35249671_rede_banco"; //rede banco


    $conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

    if($conexao -> connect_error){
        die("Conexão com o bando de dados falhou!". $conexao -> connect_error);
    }


?>