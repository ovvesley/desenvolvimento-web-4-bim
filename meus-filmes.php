<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>meus filmes</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark custom-nav">
        <a class="navbar-brand" href="#">amovie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inicio.php"> <i class="fa fa-home"></i> Inicio </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="fa fa-heart"></i> meus ameis <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estatisticas.php"> <i class="fa fa-chart-bar"></i>estatisca</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container w-100">
        <div class="row" id="mymovies">


            <?php
            session_start();
            require "mysql_connect.php";
            require "components.php";
            $idUsuario = $_SESSION['user_info']['idUsuario'];
            
            $query = "SELECT * FROM Usuario NATURAL JOIN Avaliacao
            WHERE Usuario.idUsuario = $idUsuario AND amou = true";



            $result = mysql_db_query($query);
            $meusameis = mysqli_fetch_assoc($result);

            while($meusameis){  
                // var_dump($meusameis);
                $idFilme = $meusameis['idFilme'];              
                renderMyCard(array("id" => $idFilme));
                $meusameis = mysqli_fetch_assoc($result);
            
            }
           
            ?>

        </div>



        <script src="lib/jquery/jquery-3.4.1.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
       
        <script src="js/meus-filmes.js"></script>
</body>

</html>