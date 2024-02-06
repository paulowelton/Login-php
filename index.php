<?php
    require_once 'conexao.php';

    if(isset($_POST['enviar'])){
        $name = $_POST['nome'];
        $pass = $_POST['senha'];

        $sql = "SELECT * FROM cadastrados WHERE nome = '$name' AND senha = '$pass'";

        $query = $connect->query($sql);
         
        if($query->num_rows > 0){
            header("location: vapo.php");
        }else{
            echo "nao cadastro pai";
        }
    }
    
    if(isset($_POST['cadastrar'])){
        header("location: cadastro.php");
        exit;
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
    <h1>LOGIN</h1>
    <hr>
    <form action="" method="post">
        nome: <input type="text" name="nome"> <br>
        senha: <input type="password" name="senha">
        <button name='enviar' >enviar</button>
        <button type="submit" name="cadastrar" >me cadastrar</button>
    </form>
</body>
</html>