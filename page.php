<?php 
session_start();
require "includes/validation.php";
?>
<!doctype html>
<html lang="en">
<head>
    <?php include("includes/head.php");?>
</head>
<body >
<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->
<!-- begin::header -->
<div class="header">
    <div class="header-left">
        <?php include("includes/header-left.php");?>
    </div>
    <div class="header-body">
        <?php include("includes/header-body.php");?>
    </div>
</div>
<!-- end::header -->
<!-- begin::main -->
<div id="main">
    <!-- begin::navigation -->
    <div class="navigation">
        <?php include("includes/navigation.php");?>
    </div>
    <!-- end::navigation -->
    <!-- begin::main-content -->
    <div class="main-content">
        <nav aria-label="breadcrumb">
            <?php include("includes/breadcrumb.php");?>
        </nav>
        <div class="row">
            <?php 
            if (!empty($_GET['page'])) {

                $page = $_GET['page'];
                
                if($page=='home'){
                    include 'pages/home.php';
                }else if($page=='professor'){
                    include 'pages/professor.php';
                }
                else if($page=='listar_professor'){
                    include 'pages/listar_professor.php';
                }
                else if($page=='cst'){
                    include 'pages/cst.php';
                }
                else if($page=='listar_cursos'){
                    include 'pages/listar_cursos.php';
                }
                else if($page=='alunos'){
                    include 'pages/alunos.php';
                }
                else if($page=='listar_alunos'){
                    include 'pages/listar_alunos.php';
                }
                else if($page=='disciplinas'){
                    include 'pages/disciplinas.php';
                }
                else if($page=='listar_disciplinas'){
                    include 'pages/listar_disciplinas.php';
                }
                else if($page=='vincular_materia'){
                    include 'pages/vincular_materia.php';
                }
                else if($page=='disciplinas_cst'){
                    include 'pages/disciplinas_cst.php';
                }
                else if($page=='vincular_professor'){
                    include 'pages/vincular_professor_cst.php';
                }
                else if($page=='professores_cst'){
                    include 'pages/professores_cst.php';
                }
                else if($page=='listar_disciplinas_cst'){
                    include 'pages/listar_disciplinas_cst.php';
                }
               
            }
            ?>
            
        </div>
        <!-- begin::footer -->
        <footer>
            <?php include("includes/footer.php");?>
        </footer>
        <!-- end::footer -->
    </div>
    <!-- end::main-content -->
</div>
<!-- end::main -->
<?php include("includes/script.php");?>
</body>
</html>
