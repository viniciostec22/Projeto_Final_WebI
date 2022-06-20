<h5>Login</h5>
<!-- form -->
<form action="index.php" method="POST">
    <div class="form-group">
        <input name="email" id="email" type="text" class="form-control" placeholder="Informe o e-mail" required autofocus>
    </div>
    <div class="form-group">
        <input name="senha" id="senha" type="password" class="form-control" placeholder="Informe a senha senha" required>
    </div>
    <div class="form-group d-flex justify-content-between">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Lembrar-me</label>
        </div>
        <a href="recovery.php">Resetar Senha</a>
    </div>
    <button class="btn btn-primary btn-block">Entrar</button>
    <hr>
    <p class="text-muted">Não possui uma conta?</p>
    <a href="register.php" class="btn btn-outline-light btn-sm">Registrar Agora!</a>
</form>
<!-- ./ form -->
<?php

if( (!empty($_POST['email'])) and (!empty($_POST['senha'])) ){
    
    include("includes/conn.php");
    session_start();

    $login = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql="select 
        * 
    from 
        usuario
    where 
        email='".$login."' and senha='".$senha."';";


    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);

    if ($row){

        $dados = mysqli_fetch_array($result);

        
        if(!strcmp($senha, $dados['senha'])){

            $_SESSION['id_usuario'] = $dados['id'];
            $_SESSION['nome_usuario'] = $dados['nome'];
            $_SESSION['sobrenome_usuario'] = $dados['sobrenome'];
            $_SESSION['email_usuario'] = $dados['email'];

            //echo $_SESSION["id_usuario"];

            header("Location: page.php?page=home");
                
        }else{
            echo "Senha invalida!";
        }
    }else{
        echo "Usuário inexistente!";
    }

    //Fechamento da Conexão
    mysqli_close($conn);

}

?>


