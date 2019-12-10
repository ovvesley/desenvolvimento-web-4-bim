<?php

function createSession($userInfo)
{
    $_SESSION['user_info'] = $userInfo;
}

function createError($mensage)
{
    $_SESSION['error'] =  $mensage;
}

function createUser($sqlResultUser){
    return array(
        "nome" => $sqlResultUser['nome'],
        "idUsuario" => $sqlResultUser['idUsuario']
    );
}

function hasSession(){
    return isset($_SESSION['user_info']);
}

function hasErrorLogin(){
    return isset($_SESSION['error']);
}

function closeSession(){
    session_destroy();
    header("Location: index.php");
}