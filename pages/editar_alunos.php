<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("../includes/conn.php");

    $sql = "SELECT * FROM alunos WHERE id=" .$_REQUEST["id"];
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

<div class="col-md-8 d-flex justify-content-center">
<p class="h1">Editar cadastro de Alunos </p>
</div>
<div class="col-md-12  ">
    <form action="../pages/salvar_alunos.php?id=" method="POST">
        <input type="hidden" name="acao" value="editar"/>
        <input type="hidden" name="id" value="<?php print $row->id; ?>" />
        <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
            <input name="nome" id="nome" type="text" value="<?php print $row->nome; ?>" 
            class="form-control" placeholder="Informe o seu nome" required autofocus />
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Matricula</label>
            <input value="<?php print $row->matricula; ?>"name="matricula" 
            id="matricula" type="text" class="form-control" placeholder="Informe a matricula" required/>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Turma</label>
            <input value="<?php print $row->periodo_entrada; ?>"name="periodo_entrada" id="periodo_entrada" 
            type="text" class="form-control" placeholder="Informe o periodo_entrada" required/>
        </div>

        <label for="exampleInputEmail1">Curso</label>
            <input value="<?php print $row->cst_gti_id; ?>"name="cst_gti_id" id="cst_gti_id" 
            type="text" class="form-control" placeholder="Informe o cst_gti_id" required/>
        </div>
       <div class="form-group">
            <button class="btn btn-Success ">Salva</button>
            <button class="btn btn-danger ">
                <a href="../page.php?page=listar_alunos">Cancelar</a>
            </button>
        </div>
        
    </form>
   
</div>

