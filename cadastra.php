<?php
    require_once("conexao.php");

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
   
    if(isset($_POST['nome']) && isset($_POST['senha'])) {
        //inserção de dados
        $sql = "INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senha')";
        

        if (mysqli_query($conn, $sql)) {
            header('Location: home.php');
        } else {
                echo "Erro ao cadastrar:  ";
        }
    }
?>