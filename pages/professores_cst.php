<?php
    //listando professores

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("./includes/conn.php");
?>

<table id="cst_gti" class="table table-striped table-bordered">
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Curso Superior</strong></td>
        <td><strong>Professores</strong></td>
        <td><strong>Editar</strong></td>
        <td><strong>Remover</strong></td>
        
        
    </tr>
    <?php
        $sql="SELECT cst_gti_has_professores.id, cst_gti.nome, professores.nome 
        FROM cst_gti
        JOIN cst_gti_has_professores
        ON cst_gti.id = cst_gti_has_professores.professores_id
        JOIN professores
        ON professores.id =  cst_gti_has_professores.professores_id
        ORDER BY cst_gti.nome;";

        if($sql){
            print "<script> alert('Não foi encontrado nem um dado para o filtro selecionado!') </script>";
            print "<script>
                        location.href='./page.php?page=home#';
                    </script>";
        }
        $result = mysqli_query($conn, $sql);
       
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td>
                    <button class="btn btn-success">
                        <a class="text-white" href="pages/#=<?php echo $row[0]; ?> ">Editar</a>
                    </button>

                </td>
                <td>
                    <button class="btn btn-warning ">
                        <a class="text-white" href="pages/deletar_professor_cst.php?id=
                        <?php echo $row[0]; ?> " onclick="return confirm
                        ('Tem certeza que deseja deletar esse registro?');">Remover</a>
                    </button>
                </td>
                          
                               
            </tr>
        <?php
        
       
        }
    ?>
</table>


<script>
    $(document).ready(function (){
        $('#professores_cst').DataTable();
    });    
</script>