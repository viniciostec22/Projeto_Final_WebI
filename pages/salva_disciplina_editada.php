<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);

 include("../includes/conn.php");
 $disciplina      = $_POST['disciplina'];
 $periodo  = $_POST['periodo'];

 $sql2 = "UPDATE disciplinas SET
                disciplina       = '{$disciplina}',
                periodo = '{$periodo}'
               
          WHERE
              id=".$_REQUEST["id"];  
$res = $conn->query($sql2); 
                
if($res == true){
    print "<script> 
            alert('Editado com sucesso!');
        </script>";
    print "<script>
            location.href='../page.php?page=listar_disciplinas';
         </script>";
    
}else{
    print "<script> alert('Remoção não realizada!') </script>";
    print "<script>
            location.href='../page.php?page=listar_disciplinas';
         </script>";
}

mysqli_close($conn);
?>