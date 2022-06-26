<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("../includes/conn.php");

    $sql = "SELECT * FROM professores WHERE id=" .$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    
    mysqli_close($conn);
?>
<head>
<link rel="shortcut icon" href="../assets/media/image/favicon.png"/>

<!-- Plugin styles -->
<link rel="stylesheet" href="../vendors/bundle.css" type="text/css">

<!-- App styles -->
<link rel="stylesheet" href="../assets/css/app.min.css" type="text/css">

<!-- Css -->
<link rel="stylesheet" href="../vendors/dataTable/datatables.min.css" type="text/css">

<!-- Javascript -->
<script src="../vendors/dataTable/datatables.min.js"></script>
</head>
<div class="col-md-12 d-flex justify-content-center">
<p class="h1">Editar cadastro </p>
</div>
<div class="col-md-12 d-flex justify-content-center">
    <form action="../pages/salva.php?id=" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>" >
        <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
            <input name="nome" id="nome" type="text" value="<?php print $row->nome; ?>" 
            class="form-control" placeholder="Informe o seu nome" required autofocus>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Disciplina</label>
            <input value="<?php print $row->disciplina; ?>"name="disciplina" 
            id="disciplina" type="text" class="form-control" placeholder="Informe a disciplina" required>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Periodo</label>
            <input value="<?php print $row->periodo; ?>"name="periodo" id="periodo" 
            type="text" class="form-control" placeholder="Informe o periodo" required>
        </div>

        
            <button class="btn btn-Success ">Salva</button>
            <button class="btn btn-danger ">
                <a href="../page.php?page=listar_professor">Cancelar</a>
            </button>
        
    </form>
   
</div>

