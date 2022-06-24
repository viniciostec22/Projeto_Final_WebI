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
                if($page=='home'){
                    include 'pages/home.php';
                }else if($page=='listar_professor'){
                    include 'pages/listar_professor.php';
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
