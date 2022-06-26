<p class="h1">Cadastrar Disciplinas </p>
<div class="col-md-12">
    <form action="page.php?page=disciplinas" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome da Materia </label>
            <input name="disciplina" id="disciplina" type="text" class="form-control" placeholder="Materia" required autofocus>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Periodo</label>
            <input name="periodo" id="periodo" type="text" class="form-control" placeholder="Periodo" required>
        </div>
        
    
        <button class="btn btn-primary btn-block">cadastrar</button>
    </form>
   
</div>

<?php
 

if (!empty($_POST['disciplina'])) {

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("./includes/conn.php");
    
    $disciplina        = $_POST['disciplina'];
    $periodo  = $_POST['periodo'];
   
   

    //string SQL
    $sql = "INSERT INTO disciplinas
    (disciplina, periodo) 
    values ('".$disciplina."', '".$periodo."');";

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
        $('#disciplinas').DataTable();
    });    
</script>