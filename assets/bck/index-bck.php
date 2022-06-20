<form action="index.php" method="POST">
    <h1>Cadastro de Produtos</h1>
    <label>Nome do Produto</label>
    <input type="text" name="nome" id="nome" />
    <br>
    <label>Descrição</label>
    <textarea name="descricao" id="descricao"></textarea>
    <br>
    <label>Valor</label>
    <input type="text" name="valor" id="valor" />
    <br>
    <input type="submit" value="Enviar"/>
    <input type="reset" value="Limpar" />
</form>
<?php
    //Include da Conexão
    include("conn.php");
    //Variáveis dos Forms
    $nome       = $_POST['nome'];
    $descricao  = $_POST['descricao'];
    $valor      = $_POST['valor'];

    //string SQL
    $sql = "insert into produtos 
        (nome, descricao, valor) 
    values ('".$nome."', '".$descricao."', ".$valor.");";

    //Execução da Consulta
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Inserido com sucesso!')</script>";
    }else{
        echo "<script>alert('Falha ao inserir dado!')</script>";
    }

    //Fechamento da Conexão
    mysqli_close($conn);

 ?>
