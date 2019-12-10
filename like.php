<?php
session_start();
require("mysql_connect.php");
$idUsuario = $_POST["idUsuario"];
$amou = $_POST["amou"];
$idFilme = $_POST["idFilme"];

echo $amou, " -- ", $idUsuario, " -- ", $idFilme;

function mysqli_conecta_verifica($query)
{
    require("credencial.php");
    $con = mysqli_connect($host, $usuario, $senha, $database);
    $result = mysqli_query($con, $query);
    return $result;
}

if ($amou == 0) {
    $insert = mysqli_conecta_verifica("INSERT INTO `Avaliacao` (`idUsuario`, `amou`, `idFilme`) VALUES ( '$idUsuario', '$amou', '$idFilme')");
    echo "Não amou";
    header("location: ./inicio.php");
}
if ($amou == 1) {
    $insert = mysqli_conecta_verifica("INSERT INTO `Avaliacao` (`idUsuario`, `amou`, `idFilme`) VALUES ( '$idUsuario', '$amou', '$idFilme')");
    echo "Amou";
    header("location: ./inicio.php");
}
