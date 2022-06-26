<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);

 include("../includes/conn.php");
 $nome            = $_POST['nome'];
 $matricula       = $_POST['matricula'];
 $periodo_entrada = $_POST['periodo_entrada'];
 $cst_gti_id      = $_POST['cst_gti_id'];

 $sql2 = "UPDATE alunos SET
                nome            = '{$nome}',
                matricula       = '{$matricula}',
                periodo_entrada = '{$periodo_entrada}',
                cst_gti_id = '{$cst_gti_id}'
          WHERE
              id=".$_REQUEST["id"];  
$res = $conn->query($sql2);     
                
if($res == true){
    print "<script> 
            alert('Editado com sucesso!!');
        </script>";
    print "<script>
            location.href='../page.php?page=listar_alunos';
         </script>";
    
}else{
    print "<script> alert('Remoção não realizada!') </script>";
    print "<script>
            location.href='../page.php?page=listar_alunos';
         </script>";
}

mysqli_close($conn);
?>