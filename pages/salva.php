<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);

 include("../includes/conn.php");
 $nome        = $_POST['nome'];
 $disciplinas_id  = $_POST['disciplinas_id'];
 

 $sql2 = "UPDATE professores SET
                nome       = '{$nome}',
                disciplinas_id = '{$disciplinas_id}'
                
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