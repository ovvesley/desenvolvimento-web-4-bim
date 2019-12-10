<?php 
function mysql_db_query($query)
{
    require "./credencial.php";
    error_log("$host, $usuario, $senha, $database");
    $connect = mysqli_connect($host, $usuario, $senha, $database);
    if (!$connect) {
        echo mysqli_error($connect);
    }
    $result = mysqli_query($connect, $query);
   
    if ($result) {
        return $result;
    } else {
        echo mysqli_error($connect);
    }
}
function mysql_db_query_fetch_array($query)
{    
    return mysqli_fetch_array(mysql_db_query($query));
}
function mysql_db_query_fetch_assoc($query)
{    
    return mysqli_fetch_assoc(mysql_db_query($query));
}

?>