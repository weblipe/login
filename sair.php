<?php
session_start();

//Remover a váriavel da sessão'usuario'
unset($_SESSION['usuario']);

//Destruir a sesssão
session_destroy();

//Redirecionar para a index
header('Location: index.php');
exit();
?>