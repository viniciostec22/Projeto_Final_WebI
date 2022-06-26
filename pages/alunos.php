<p class="h1">Cadastrar alunos </p>
<div class="col-md-12">
    <form action="page.php?page=alunos" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome do Aluno </label>
            <input name="nome" id="nome" type="text" class="form-control" placeholder="Informe o seu nome" required autofocus>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Matricula </label>
            <input name="matricula" id="matricula" type="text" class="form-control" placeholder="Informe a disciplina" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Periodo de enetrada </label>
            <input name="periodo_entrada" id="periodo_entrada" type="text" class="form-control" placeholder="Informe o periodo de entrada" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Curso </label>
            <input name="cst_gti_id" id="cst_gti_id" type="text" class="form-control" placeholder="Informe o Curso" required>
        </div>
    
        <button class="btn btn-primary btn-block">cadastrar</button>
    </form>
   
</div>

<?php

if (!empty($_POST['nome'])) {

    include("./includes/conn.php");
    
    $nome                = $_POST['nome'];
    $matricula           = $_POST['matricula'];
    $periodo_entrada     = $_POST['periodo_entrada'];
    $cst_gti_id          = $_POST['cst_gti_id'];
   

    //string SQL
    $sql = "insert into alunos
    (nome, matricula, periodo_entrada, cst_gti_id) 
    values ('".$nome."', '".$matricula."', '".$periodo_entrada."', '".$cst_gti_id."');";

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
        $('#alunos').DataTable();
    });    
</script>