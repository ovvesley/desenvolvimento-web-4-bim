<?php 

var_dump($username);
var_dump($password);
var_dump($repassword);


session_start();
require("mysql_connect.php");
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$confsenha = $_POST["confsenha"];
function mysqli_conecta_verifica($query)
{
    require("credencial.php");
    $con = mysqli_connect($host, $usuario, $senha, $database);
    $result = mysqli_query($con, $query); //buscou e colocou o erro nessa variavel
    return $result;
}
$query = "SELECT nome FROM Usuario WHERE nome='$nome'"; //buscando email na tabela do bd
$result = mysqli_conecta_verifica($query);
if (!$result) {
    echo "Ocorreu um erro";
} else {
    $array = mysqli_fetch_array($result);
    if ($array['nome'] == $nome) {
        echo "Nome de usuário já existe. Use outro.";
    } else {
        if ($senha == $confsenha) {
            $insert = mysqli_conecta_verifica("INSERT INTO `Usuario`( `nome`,`senha`) VALUES ($nome','$senha') ");
            if (!$insert) {
                echo "Cadastro não realizado.";
            } else {
                echo "Cadastro feito com sucesso!";
                header("location: ./index.php");
            }
        } else {
            echo "As senhas não coincidem.";
        }
    }
}



?>