<?php

    include("./includes/conn.php");
    
    $id_professor = $_GET["id"];
    
    $sql = "DELETE FROM professores WHERE id = '$id_professor'";
    var_dump(mysqli_connect($conn,$sql));

    echo $sql;
    
 
   
    mysqli_close($conn);
?>




