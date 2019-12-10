<?php
session_start();
require("mysql_connect.php");
$idUsuario = $_POST["idUsuario"];
$amou = $_POST["amou"];
$idFilme = $_POST["idFilme"];

function mysqli_conecta_verifica($query)
{
    require("credencial.php");
    $con = mysqli_connect($host, $usuario, $senha, $database);
    $result = mysqli_query($con, $query); 
    return $result;
}


            if ($amou == 0) {
                $insert = mysqli_conecta_verifica("INSERT INTO `Avaliacao`('amou', 'idFilme') VALUES ('$amou', '$idFilme') ");
                echo "Não amou";
                if (!$insert) {
                    echo "Avaliado.";
                } else {
                    echo "Erro na avaliação.";
                    header("location: ./index.php");
                }
            }
            if($amou == 1){
                $insert = mysqli_conecta_verifica("INSERT INTO `Avaliacao`('amou', idFilme) VALUES ('$amou', '$idFilme') ");
                echo "Amou";
                if (!$insert) {
                    echo "Filme avaliado.";
                } else {
                    echo "Erro na avaliação.";
                    header("location: ./index.php");
                }
            }


?>