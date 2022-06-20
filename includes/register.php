<h5>Criar Conta</h5>
<!-- form -->
<form action="register.php" method="POST">
    <div class="form-group">
        <input name="nome" id="nome" type="text" class="form-control" placeholder="Informe o seu nome" required autofocus>
    </div>
    <div class="form-group">
        <input name="sobrenome" id="sobrenome" type="text" class="form-control" placeholder="Informe o seu sobrenome" required>
    </div>
    <div class="form-group">
        <input name="email" id="email" type="email" class="form-control" placeholder="Informe o seu Email" required>
    </div>
    <div class="form-group">
        <input name="senha" id="senha" type="password" class="form-control" placeholder="Informe a sua senha" required>
    </div>
    <button class="btn btn-primary btn-block">Registrar</button>
    <hr>
    <p class="text-muted">Já possui conta?</p>
    <a href="index.php" class="btn btn-outline-light btn-sm">Logar!</a>
</form>
<!-- ./ form -->
<?php

if (!empty($_POST['nome'])) {
    include("includes/conn.php");

    $nome       = $_POST['nome'];
    $sobrenome  = $_POST['sobrenome'];
    $email      = $_POST['email'];
    $senha      = md5($_POST['senha']);

    //string SQL
    $sql = "insert into usuario 
    (nome, sobrenome, email, senha) 
    values ('".$nome."', '".$sobrenome."', '".$email."', '".$senha."');";

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