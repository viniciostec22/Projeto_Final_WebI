<h5>Criar Conta</h5>
<!-- form -->
<form action="register.php" method="POST">
    <div class="form-group">
        <input name="name" id="name" type="text" class="form-control" placeholder="Informe o seu nome" required autofocus>
    </div>
    <div class="form-group">
        <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Informe o seu sobrenome" required>
    </div>
    <div class="form-group">
        <input name="email" id="email" type="email" class="form-control" placeholder="Informe o seu Email" required>
    </div>
    <div class="form-group">
        <input name="password" id="password" type="password" class="form-control" placeholder="Informe a sua senha" required>
    </div>
    <button class="btn btn-primary btn-block">Registrar</button>
    <hr>
    <p class="text-muted">Já possui conta?</p>
    <a href="index.php" class="btn btn-outline-light btn-sm">Logar!</a>
</form>
<!-- ./ form -->
<?php

if (!empty($_POST['name'])) {
    include("./includes/conn.php");

    $name       = $_POST['name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);

    //string SQL
    $sql = "insert into usuario 
    (name, last_name, email, password) 
    values ('".$name."', '".$last_name."', '".$email."', '".$password."');";

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