<?php
session_start();

if(isset($_GET["busca"])){

    $conteudo = $_GET["busca"];

    if(isset($_SESSION["postagens"])){
        echo "<ul>";
        foreach($_SESSION["postagens"] as $postagem){
            if(stripos($postagem, $conteudo) !== false){
                echo "<li> $postagem </li>";
            }
        }
        echo "</ul>";
    }
}

?>