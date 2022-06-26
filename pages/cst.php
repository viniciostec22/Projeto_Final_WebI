<div class="col-md-12">
    <form action="page.php?page=cst" method="POST">
        <div class="form-group">
        <label for="exampleFormControlInput1">Nome do curso </label>
            <input name="nome" id="nome" type="text" class="form-control" placeholder="Informe o nome do curso" required autofocus>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="5" cols="50"placeholder="Até 255 caracteres"></textarea>
        </div>
        
    
        <button class="btn btn-primary btn-block">cadastrar</button>
    </form>
   
</div>

<?php
 

if (!empty($_POST['nome'])) {

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("./includes/conn.php");
    
    $nome        = $_POST['nome'];
    $descricao  = $_POST['descricao'];
   
   

    //string SQL
    $sql = "insert into cst_gti
    (nome, descricao) 
    values ('".$nome."', '".$descricao."');";

    //Execução da Consulta
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Inserido com sucesso!')</script>";
    } else {
        echo "<script>alert('Falha ao inserir dado!')</script>";
    }

    //Fechamento da Conexão
    mysqli_close($conn);
}
?>

<script>
    $(document).ready(function (){
        $('#cst').DataTable();
    });    
</script>