<?php
    //listando professores

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("./includes/conn.php");
?>

<table id="cst_gti" class="table table-striped table-bordered">
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Disciplinas</strong></td>
        <td><strong>Periodo</strong></td>
        <td><strong>Editar</strong></td>
        <td><strong>Remover</strong></td>
    </tr>
    <?php
        $sql="SELECT * FROM disciplinas ;";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                
                <td>
                    <button class="btn btn-success">
                        <a class="text-white" href="pages/editar_disciplinas.php?id=<?php echo $row[0]; ?> ">Editar</a>
                    </button>

            </td>
                <td>
                    <button class="btn btn-warning ">
                        <a class="text-white" href="pages/deletar_disciplinas.php?id=
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
        $('#listar_disciplinas').DataTable();
    });    
</script>

