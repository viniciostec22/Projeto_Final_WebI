<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);

 include("../includes/conn.php");
 $nome        = $_POST['nome'];
 $disciplina  = $_POST['disciplina'];
 $periodo     = $_POST['periodo'];

 $sql2 = "UPDATE professores SET
                nome       = '{$nome}',
                disciplina = '{$disciplina}',
                periodo    = '{$periodo}'
          WHERE
              id=".$_REQUEST["id"];  
$res = $conn->query($sql2);     
                
if($res == true){
    print "<script> 
            alert('editado com sucesso!');
        </script>";
    print "<script>
            location.href='../page.php?page=listar_professor';
         </script>";
    
}else{
    print "<script> alert('Remoção não realizada!') </script>";
    print "<script>
            location.href='../page.php?page=listar_professor';
         </script>";
}

mysqli_close($conn);
?>