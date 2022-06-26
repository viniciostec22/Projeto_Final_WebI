
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("../includes/conn.php");
    
    $id_alunos = $_GET["id"];
    
  

    $sql = "DELETE FROM alunos WHERE id = '$id_alunos'";
   
    var_dump(mysqli_query($conn,$sql));

    if(mysqli_query($conn, $sql)){
        print "<script> 
                alert('Remoção realizada com sucesso!');
            </script>";
        print "<script>
                location.href='../page.php?page=listar_alunos';
            </script>";
    }else{
        echo "<script> 
                alert('Remoção não realizada!') 
              </script>";
        print "<script>
                location.href='../page.php?page=listar_alunos';
              </script>";
    }
   
    mysqli_close($conn);
?>


