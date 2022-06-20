<?php
    //inicio da sessão
    session_start();

    //verifica se existe os dados da sessão de login do usuário
    if(!isset($_SESSION["id_usuario"])){
        //Usuário NÃO está logado? Direciona para a página de de login
        header("Location: index.php");
        exit;
    }

?>