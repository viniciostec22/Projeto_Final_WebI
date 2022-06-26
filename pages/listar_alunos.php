
<?php
    //listando professores

    include("./includes/conn.php");
?>

<table id="professores" class="table table-striped table-bordered">
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nome</strong></td>
        <td><strong>Matricula</strong></td>
        <td><strong>Turma</strong></td>
        <td><strong>Curso</strong></td>
        <td><strong>Editar</strong></td>
        <td><strong>Remover</strong></td>
    </tr>
    <?php
        $sql="SELECT alunos.id, alunos.nome, alunos.matricula, alunos.periodo_entrada, cst_gti.nome 
            FROM alunos 
            JOIN cst_gti
            ON alunos.id = cst_gti_id; ";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td>
                    <button class="btn btn-success">
                        <a class="text-white" href="pages/editar_alunos.php?id=<?php echo $row[0]; ?> ">Editar</a>
                    </button>

            </td>
                <td>
                    <button class="btn btn-warning ">
                        <a class="text-white" href="pages/deletar_alunos.php?id=
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
        $('#listar_alunos').DataTable();
    });    
</script>

