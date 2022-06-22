<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Professores</h6>
            <table id="professores" class="table table-striped table-bordered">
              
            <form action="professor.php" method="POST">
                <div class="form-group">
                    <input name="nome" id="nome" type="text" class="form-control" placeholder="Nome do Professor" required autofocus>
                </div>
                <div class="form-group">
                    <input name="disciplina" id="disciplina" type="text" class="form-control" placeholder="Disciplina" required>
                </div>
                <div class="form-group">
                    <input name="periodo" id="periodo" type="text" class="form-control" placeholder="Semestre" required>
                </div>
                <button class="btn btn-primary btn-block">Cadastrar</button>
           </form>
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Disciplina</th>
                  <th>Semestre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiago Nogueira</td>
                  <td>Desenvolvimento Web</td>
                  <td>4° Semestre</td>
                </tr>
                ...
              </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('#professores').DataTable();
    });    
</script>

<?php

if (!empty($_POST['nome'])) {
    include("./includes/conn.php");

    $nome       = $_POST['nome'];
    $disciplina  = $_POST['disciplina'];
    $periodo      = $_POST['semestre'];
   

    //string SQL
    $sql = "insert into Professores 
    (nome, disciplina, periodo) 
    values ('".$nome."', '".$disciplina."', '".$periodo."');";

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