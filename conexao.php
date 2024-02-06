<?php
$servername = "localhost";
$user = "root";
$password = "123456";
$dbname = "cadastro";

$connect = new mysqli($servername, $user, $password, $dbname);

if($connect->connect_error){
    echo "conexao mal sucedida";
}

?>