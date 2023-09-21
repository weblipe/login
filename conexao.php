<?php

$severname = "localhost";
$database = "usuario";
$username = "root";
$password = "";
#cria conexão
$conn = mysqli_connect($severname, $username, $password, $database);
#verifica a conexão
if(!$conn){
    die("A conexão falhou:" . mysqli_connect_error());
}

?>