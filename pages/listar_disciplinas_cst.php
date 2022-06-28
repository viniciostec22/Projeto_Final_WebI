
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
        <td><strong>Materias ofertadas</strong></td>
        <td><strong>Periodo</strong></td>
        <td><strong>Editar</strong></td>
        <td><strong>Remover</strong></td>
        
    </tr>
    <?php
        $sql="SELECT cst_gti.id, cst_gti.nome, disciplinas.disciplina, disciplinas.periodo FROM cst_gti
        JOIN cst_gti_has_disciplinas
        ON cst_gti.id = cst_gti_has_disciplinas.cst_gti_id
        JOIN disciplinas
        ON disciplinas.id =  cst_gti_has_disciplinas.disciplinas_id
        ORDER BY cst_gti.nome;";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>  
                <td><?php echo $row[3]; ?></td>   
                <td>
                    <button class="btn btn-success">
                        <a class="text-white" href="pages/editar_disciplina_cst.php?id=<?php echo $row[0]; ?> ">Editar</a>
                    </button>

            </td>
                <td>
                    <button class="btn btn-warning ">
                        <a class="text-white" href="pages/deletar_disciplina_cst.php?id=
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
        $('#listar_disciplinas_cst').DataTable();
    });    
</script>