<p class="h1">Vincular materias ao curso</p>
<div class="col-md-12">
    <form action="page.php?page=vincular_materia" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Curso</label>
            <input name="cst_gti_id" id="cst_gti_id" type="text" class="form-control" placeholder="Informe o ID do Curso" required autofocus>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Materia</label>
            <input name="disciplinas_id" id="disciplinas_id" type="text" class="form-control" placeholder="Informe o ID da Materia" required autofocus>
        </div>
        
    
        <button class="btn btn-primary btn-block">cadastrar</button>
    </form>
   
</div>

<?php
 

if (!empty($_POST['cst_gti_id'])) {

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("./includes/conn.php");
    
    $cst_gti_id        = $_POST['cst_gti_id'];
    $disciplinas_id  = $_POST['disciplinas_id'];
   
   

    //string SQL
    $sql = "INSERT INTO cst_gti_has_disciplinas
    (cst_gti_id, disciplinas_id) 
    values ('".$cst_gti_id."', '".$disciplinas_id."');";

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
        $('#vincular_materia').DataTable();
    });    
</script>