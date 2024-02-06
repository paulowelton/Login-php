<?php
    require_once 'conexao.php';

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO cadastrados (nome, senha) VALUES ('$nome', '$senha')";

        $connect->query($sql);

        header("location: index.php");
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <h1>cadastro</h1>
    <form action="" method="post">
        nome de usuario: <br> <input type="text" name="nome"> <br>
        senha: <br> <input type="password" name="senha"> <br>
        <button style="margin-top:5px;" name="cadastrar">me cadastrar</button>
    </form>
</body>
</html>