<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include("../includes/conn.php");

    $sql = "SELECT * FROM cst_gti_has_disciplinas WHERE id=" .$_REQUEST["id"];
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
<p class="h1">Editar professores Vinculados ao curso </p>
</div>
<div class="col-md-12 d-flex justify-content-center">
    <form action="../pages/salva_disciplinas_cst.php?id=" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>" >
        <div class="form-group">
        <label for="exampleInputEmail1">ID do Curso</label>
            <input name="cst_gti_id" id="cst_gti_id" type="text" value="<?php print $row->cst_gti_id; ?>" 
            class="form-control"  required autofocus>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">ID da Disciplinas</label>
        <input value="<?php print $row->disciplinas_id; ?>"name="disciplinas_id" id="disciplinas_id" 
            type="text" class="form-control" required>
            
        </div>

        
        
            <button class="btn btn-Success ">Salva</button>
            <button class="btn btn-danger ">
                <a href="../page.php?page=professores_cst">Cancelar</a>
            </button>
        
    </form>
