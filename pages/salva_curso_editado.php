<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);

 include("../includes/conn.php");
 $nome      = $_POST['nome'];
 $descricao  = $_POST['descricao'];

 $sql2 = "UPDATE cst_gti SET
                nome       = '{$nome}',
                descricao = '{$descricao}'
               
          WHERE
              id=".$_REQUEST["id"];  
$res = $conn->query($sql2); 
                
if($res == true){
    print "<script> 
            alert('Editado com sucesso!');
        </script>";
    print "<script>
            location.href='../page.php?page=listar_cursos';
         </script>";
    
}else{
    print "<script> alert('Remoção não realizada!') </script>";
    print "<script>
            location.href='../page.php?page=listar_cursos';
         </script>";
}

mysqli_close($conn);
?>