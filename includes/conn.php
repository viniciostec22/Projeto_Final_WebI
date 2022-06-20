<?php
    //Declarações de Variavéis
    $servername ="127.0.0.1";
    $database   ="projeto01";
    $username   ="root";
    $password   ="root";

    //Criação da Conexão com a BD
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die ("Falha de Conexão com o MySQL". mysqli_connect_error());
    }else{
        echo "Conexão realizada com sucesso!!";
    }


?>