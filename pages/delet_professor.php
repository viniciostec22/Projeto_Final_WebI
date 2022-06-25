
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("../includes/conn.php");
    
    $id_professor = $_GET["id"];
    
  

    $sql = "DELETE FROM professores WHERE id = '$id_professor'";
   
    var_dump(mysqli_query($conn,$sql));

    if(mysqli_query($conn, $sql)){
        echo "<script> 
                alert('Remoção realizada com sucesso!');
            </script>";
    }else{
        echo "<script> alert('Remoção não realizada!') </script>";
    }
   
    mysqli_close($conn);
?>


