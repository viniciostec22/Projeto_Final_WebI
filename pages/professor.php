<p class="h1">Cadastrar Professores! </p>
<div class="col-md-12">
    <form action="page.php?page=professor" method="POST">
        <div class="form-group">
            <input name="nome" id="nome" type="text" class="form-control" placeholder="Informe o seu nome" required autofocus>
        </div>
        
        <div class="form-group">
            <input name="disciplinas_id" id="disciplinas_id" type="text" class="form-control" placeholder="Informe a disciplina" required>
        </div>
        <div class="form-group">
            <input name="periodo" id="periodo" type="text" class="form-control" placeholder="Informe o periodo" required>
        </div>
    
        <button class="btn btn-primary btn-block">cadastrar</button>
    </form>
   
</div>

<?php

if (!empty($_POST['nome'])) {

    include("./includes/conn.php");
    
    $nome        = $_POST['nome'];
    $disciplinas_id  = $_POST['disciplinas_id'];
   
   

    //string SQL
    $sql = "insert into professores
    (nome, disciplinas_id) 
    values ('".$nome."', '".$disciplinas_id."');";

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
        $('#professores').DataTable();
    });    
</script>