<?php
session_start();
require "components.php";
require "session.php";
if (!hasSession()){
	header("Location: pagina_erro.php" );
}
?>

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
				<li class="nav-item active">
					<a class="nav-link" href="#"> <i class="fa fa-home"></i> Inicio <span class="sr-only">(Página atual)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="meus-filmes.php"> <i class="fa fa-heart"></i> meus ameis</a>
				</li>				
			</ul>			
		</div>
	</nav>

	<div class="container">
		<div class='content-card-principal'>
			<div class="d-flex justify-content-center">
				<div class="col-10 d-flex justify-content-center">
					<div class="cartao ">
						<?php
						renderCard()
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="lib/jquery/jquery-3.4.1.min.js"></script>
	<script src="lib/popper/popper.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>