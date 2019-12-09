<?php

session_start();
require ("mysql_connect.php");
require ("session.php");
$nome = $_POST["nome"];
$senha = $_POST["senha"];
if ($result = mysql_db_query_fetch_array("SELECT * FROM Usuario WHERE nome ='$nome' AND senha = '$senha'")) {
    $userInfo = createUser($result);
    createSession($userInfo);
    header("Location: inicio.php");
    // echo "Login realizado com sucesso.";
} else {
    $login = false;
    // echo("Erro!");
    createError("Erro!");
    header("Location: index.php");
    
}
?>