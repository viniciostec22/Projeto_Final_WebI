<?php
    include("conn.php");
?>

<table border="1">
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nome</strong></td>
        <td><strong>Descrição</strong></td>
        <td><strong>Valor</strong></td>
        <td><strong>Editar</strong></td>
        <td><strong>Remover</strong></td>
    </tr>
    <?php
        $sql="select * from produtos;";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td>Editar</td>
                <td>
                    <a href="list.php?id=<?php echo $row[0]; ?>">Remover</a>
                </td>
            </tr>
        <?php
        }

        if( !empty($_GET['id'])){
            $sql2 = "delete from produtos where id=".$_GET['id'];

            if(mysqli_query($conn, $sql2)){
                echo "<script> 
                        alert('Remoção realizada com sucesso!');
                    </script>";
            }else{
                echo "<script> alert('Remoção não realizada!') </script>";
            }
            
        }
    ?>
</table>