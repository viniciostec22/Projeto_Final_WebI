<?php
    //Declarações de Variavéis
    $servername ="127.0.0.1";
    $database   ="crm_academico";
    $username   ="root";
    $password   ="059580";

    //Criação da Conexão com a BD
    $conn = mysqli_connect($servername, $username, $password, $database, '3306');

    if(!$conn){
        die ("Falha de Conexão com o MySQL". mysqli_connect_error());
    }else{
        echo "Conexão realizada com sucesso!!";
    }


?>