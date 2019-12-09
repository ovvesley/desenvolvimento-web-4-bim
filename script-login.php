<?php

session_start();

require ("mysql_connect.php");
$nome = $_POST["nome"];
$senha = $_POST["senha"];
if (mysql_db_query_fetch_array("SELECT * FROM Usuario WHERE nome ='$nome' AND senha = '$senha'")) {
    $login = true;
    echo "Login realizado com sucesso.";
} else {
    $login = false;
    echo("Erro!");

}
?>