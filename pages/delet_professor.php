<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("../includes/conn.php");
    
    $id_professor = $_GET["id"];
    echo $id_professor;
  

    $sql = "DELETE FROM professores WHERE id = '$id_professor'";
    echo $sql;
    var_dump(mysqli_query($conn,$sql));
 
   
    mysqli_close($conn);
?>




