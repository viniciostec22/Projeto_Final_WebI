<p class="h1">Cadastrar Professores </p>
<div class="col-md-12">
    <form action="page.php?page=professor" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome do Professor </label>
            <input name="nome" id="nome" type="text" class="form-control" placeholder="Informe o seu nome" required autofocus>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">ID da Disciplina Ministrada</label>
            <input name="disciplinas_id" id="disciplinas_id" type="text" class="form-control" placeholder="Informe o ID da disciplina" required>
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