<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);

 include("../includes/conn.php");

 $cst_gti_id      = $_POST['cst_gti_id'];
 $professores_id  = $_POST['professores_id'];

 $sql2 = "UPDATE cst_gti_has_professores SET
                cst_gti_id     = '{$cst_gti_id}',
                professores_id = '{$professores_id}'
               
          WHERE
              id=".$_REQUEST["id"];  

$res = $conn->query($sql2); 
                
if($res == true){
    print "<script> 
            alert('Editado com sucesso!');
        </script>";
    print "<script>
            location.href='../page.php?page=professores_cst';
         </script>";
    
}else{
    print "<script> alert('Remoção não realizada!') </script>";
    print "<script>
            location.href='../page.php?page=professores_cst';
         </script>";
}

mysqli_close($conn);
?>