
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("../includes/conn.php");
    
    $id_disciplina = $_GET["id"];
    
  

    $sql = "DELETE FROM disciplinas WHERE id = '$id_disciplina'";
   
    var_dump(mysqli_query($conn,$sql));

    if(mysqli_query($conn, $sql)){
        print "<script> 
                alert('Remoção realizada com sucesso!');
            </script>";
        print "<script>
                location.href='../page.php?page=listar_disciplinas';
            </script>";
    }else{
        echo "<script> 
                alert('Remoção não realizada!') 
              </script>";
        print "<script>
                location.href='../page.php?page=listar_disciplinas';
              </script>";
    }
   
    mysqli_close($conn);
?>

