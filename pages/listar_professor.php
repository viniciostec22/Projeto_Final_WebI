
<?php
    //listando professores

    include("./includes/conn.php");
?>

<table id="professores" class="table table-striped table-bordered">
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nome</strong></td>
        <td><strong>Disciplina</strong></td>
        <td><strong>Semestre</strong></td>
        <td><strong>Editar</strong></td>
        <td><strong>Remover</strong></td>
    </tr>
    <?php
        $sql="select * from professores;";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td>
                    <button class="btn btn-success" >Editar</button>

            </td>
                <td>
                    <button class="btn btn-danger">
                    <a href="pages/delet_professor.php?id=<?php echo $row[0]; ?>">Remover</a>
                    </button>
                </td>
            </tr>
        <?php
        }
    ?>
</table>



<script>
    $(document).ready(function (){
        $('#listar_porfessor').DataTable();
    });    
</script>

