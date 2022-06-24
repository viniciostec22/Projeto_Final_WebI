<?php

    include("./includes/conn.php");
    
    $id_professor = $_GET["id"];
    
    $sql = "delete  from professor where id =  $id_professor";
    echo $sql;

    $result = mysqli_query($conn, $sql);
    echo "teste";

   

?>





