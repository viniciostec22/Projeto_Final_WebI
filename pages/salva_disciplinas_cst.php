<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);

 include("../includes/conn.php");

 $cst_gti_id      = $_POST['cst_gti_id'];
 $disciplinas_id  = $_POST['disciplinas_id'];

 $sql2 = "UPDATE cst_gti_has_disciplinas SET
                cst_gti_id     = '{$cst_gti_id}',
                disciplinas_id = '{$disciplinas_id}'
               
          WHERE
              id=".$_REQUEST["id"];  

$res = $conn->query($sql2); 
                
if($res == true){
    print "<script> 
            alert('Editado com sucesso!');
        </script>";
    print "<script>
            location.href='../page.php?page=listar_disciplinas_cst';
         </script>";
    
}else{
    print "<script> alert('Remoção não realizada!') </script>";
    print "<script>
            location.href='../page.php?page=listar_disciplinas_cst';
         </script>";
}

mysqli_close($conn);
?>